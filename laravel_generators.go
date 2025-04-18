package main

import (
	"fmt"
	"os"
	"path/filepath"
	"strings"
	"time"

	"github.com/xuri/excelize/v2" // Añadimos la importación de excelize
)

// generarArchivosLaravel genera todos los archivos necesarios para Laravel
func generarArchivosLaravel(f *excelize.File, sheets []string, seedDir, migrationDir, modelDir string) {
	// Extraer información de tipos de datos desde el input
	tiposDeCampos := extraerEstructuraCampos()

	for _, sheet := range sheets {
		rawRows, err := f.GetRows(sheet)
		if err != nil {
			fmt.Printf("⚠ No pude leer %q: %v\n", sheet, err)
			continue
		}

		rows := trimEmptyRows(rawRows)
		if len(rows) < 2 {
			fmt.Printf("⚠ %q sin datos, ignorada\n", sheet)
			continue
		}

		headers := rows[0]
		dataRows := rows[1:]

		// Obtener campos específicos para esta tabla
		camposTabla := obtenerCamposTabla(sheet, tiposDeCampos)

		className := toClassName(sheet)
		modelName := "Zofri" + className
		tableName := "zofri_" + normalize(sheet)

		// Generar Seeder PHP
		seederClassName := className + "Seeder"
		if err := generateSeeder(seedDir, seederClassName, modelName, headers, dataRows); err != nil {
			fmt.Printf("⚠ Error al generar seeder para %q: %v\n", sheet, err)
		}

		// Generar Migración
		if err := generateMigration(migrationDir, className, tableName, headers, camposTabla); err != nil {
			fmt.Printf("⚠ Error al generar migración para %q: %v\n", sheet, err)
		}

		// Generar Modelo
		if err := generateModel(modelDir, modelName, tableName, headers); err != nil {
			fmt.Printf("⚠ Error al generar modelo para %q: %v\n", sheet, err)
		}
	}

	fmt.Println("\n✅ Archivos Laravel generados correctamente")
}

// generateSeeder crea un archivo seeder de Laravel
func generateSeeder(seedDir string, className string, modelName string, headers []string, dataRows [][]string) error {
	seedPath := filepath.Join(seedDir, className+".php")
	seeder, err := os.Create(seedPath)
	if err != nil {
		return err
	}
	defer seeder.Close()

	fmt.Fprintf(seeder, `<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\%s;
use App\Enums\VigenciaEnum;

class %s extends Seeder
{
    public function run()
    {
        $data = [
`, modelName, className)

	for _, row := range dataRows {
		fmt.Fprintln(seeder, "            [")
		for i, cell := range row {
			if i < len(headers) {
				key := normalize(headers[i])

				// Manejo especial para campo de vigencia
				if strings.ToLower(key) == "vigencia" {
					vigenciaValue := "VigenciaEnum::NO_VIGENTE"
					if strings.ToUpper(cell) == "S" {
						vigenciaValue = "VigenciaEnum::VIGENTE"
					}
					fmt.Fprintf(seeder, "                '%s' => %s,\n", key, vigenciaValue)
				} else {
					fmt.Fprintf(seeder, "                '%s' => '%s',\n", key, cell)
				}
			}
		}
		fmt.Fprintln(seeder, "            ],")
	}

	fmt.Fprintf(seeder, `        ];

        foreach ($data as $item) {
            %s::create($item);
        }
    }
}
`, modelName)

	fmt.Printf("✅ Seeder: %s\n", seedPath)
	return nil
}

// generateMigration crea un archivo de migración de Laravel
func generateMigration(migrationDir string, className string, tableName string, headers []string, campos []map[string]string) error {
	timestamp := time.Now().Format("2006_01_02_150405")
	fileName := fmt.Sprintf("%s_create_%s_table.php", timestamp, tableName)
	migPath := filepath.Join(migrationDir, fileName)
	migFile, err := os.Create(migPath)
	if err != nil {
		return err
	}
	defer migFile.Close()

	classMig := fmt.Sprintf("Create%sTable", className)

	fmt.Fprintf(migFile, `<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\VigenciaEnum;

class %s extends Migration
{
    public function up(): void
    {
        Schema::create('%s', function (Blueprint $table) {
            $table->id();
`, classMig, tableName)

	// Asociación de campos a tipos de dato Laravel según especificaciones
	for _, h := range headers {
		col := normalize(h)

		// Buscar el tipo de dato y descripción en campos
		tipoDato := "string"
		nullable := "->nullable()"
		comentario := ""

		for _, campo := range campos {
			if strings.EqualFold(campo["campo"], h) {
				switch strings.ToUpper(campo["tipodato"]) {
				case "VARCHAR2(10)", "VARCHAR2(40)", "VARCHAR2(50)", "VARCHAR2(60)", "VARCHAR2(100)", "VARCHAR2(200)":
					maxLen := extractNumberFromString(campo["tipodato"])
					tipoDato = fmt.Sprintf("string(%d)", maxLen)
				case "NUMBER(4,0)":
					tipoDato = "integer"
				case "CHAR(1)":
					if strings.ToLower(col) == "vigencia" {
						tipoDato = "string"
						nullable = ""
						comentario = " // Utiliza VigenciaEnum"
					} else {
						tipoDato = "char(1)"
					}
				}

				if campo["descripcion"] != "" {
					if comentario == "" {
						comentario = fmt.Sprintf(" // %s", campo["descripcion"])
					}
				}
				break
			}
		}

		if strings.ToLower(col) == "vigencia" {
			fmt.Fprintf(migFile, "            $table->%s('%s')%s->default(VigenciaEnum::VIGENTE->value);%s\n",
				tipoDato, col, nullable, comentario)
		} else {
			fmt.Fprintf(migFile, "            $table->%s('%s')%s;%s\n",
				tipoDato, col, nullable, comentario)
		}
	}

	fmt.Fprintf(migFile, `            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('%s');
    }
}
`, tableName)

	fmt.Printf("✅ Migración: %s\n", migPath)
	return nil
}

// generateModel crea un archivo de modelo de Laravel
func generateModel(modelDir string, modelName string, tableName string, headers []string) error {
	modPath := filepath.Join(modelDir, modelName+".php")
	modFile, err := os.Create(modPath)
	if err != nil {
		return err
	}
	defer modFile.Close()

	// Determinar si tiene campo de vigencia
	tieneVigencia := hasVigenciaField(headers)

	// Corregimos las barras invertidas duplicadas en el string de imports
	imports := "use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;\nuse Illuminate\\Database\\Eloquent\\Model;"
	if tieneVigencia {
		imports += "\nuse App\\Enums\\VigenciaEnum;"
	}

	fmt.Fprintf(modFile, `<?php

namespace App\Models;

%s

class %s extends Model
{
    use HasFactory;

    protected $table = '%s';
    
`, imports, modelName, tableName)

	// Si tiene campo de vigencia, agregar casts
	if tieneVigencia {
		fmt.Fprintln(modFile, "    protected $casts = [")
		fmt.Fprintln(modFile, "        'vigencia' => VigenciaEnum::class,")
		fmt.Fprintln(modFile, "    ];")
		fmt.Fprintln(modFile, "")
	}

	fmt.Fprintln(modFile, "    protected $fillable = [")
	for _, h := range headers {
		col := normalize(h)
		fmt.Fprintf(modFile, "        '%s',\n", col)
	}
	fmt.Fprintln(modFile, "    ];")

	// Si tiene campo de vigencia, agregar scope
	if tieneVigencia {
		fmt.Fprintln(modFile, "")
		fmt.Fprintln(modFile, "    // Scope para filtrar registros vigentes")
		fmt.Fprintln(modFile, "    public function scopeVigente($query)")
		fmt.Fprintln(modFile, "    {")
		fmt.Fprintln(modFile, "        return $query->where('vigencia', VigenciaEnum::VIGENTE);")
		fmt.Fprintln(modFile, "    }")
	}

	fmt.Fprintln(modFile, "}")

	fmt.Printf("✅ Modelo: %s\n", modPath)
	return nil
}

// generateEnums genera los archivos de enumeraciones
func generateEnums(enumDir string) error {
	// Generar VigenciaEnum
	enumPath := filepath.Join(enumDir, "VigenciaEnum.php")
	enumFile, err := os.Create(enumPath)
	if err != nil {
		return err
	}
	defer enumFile.Close()

	fmt.Fprintf(enumFile, `<?php

namespace App\Enums;

enum VigenciaEnum: string
{
    case VIGENTE = 'S';
    case NO_VIGENTE = 'N';
    
    public function label(): string
    {
        return match($this) {
            self::VIGENTE => 'Vigente',
            self::NO_VIGENTE => 'No vigente',
        };
    }
    
    public function isVigente(): bool
    {
        return $this === self::VIGENTE;
    }
}
`)

	fmt.Printf("✅ Enum: %s\n", enumPath)
	return nil
}

// hasVigenciaField verifica si hay campo de vigencia
func hasVigenciaField(headers []string) bool {
	for _, h := range headers {
		if strings.ToLower(normalize(h)) == "vigencia" {
			return true
		}
	}
	return false
}

// extractNumberFromString extrae un número de una cadena VARCHAR2(50) -> 50
func extractNumberFromString(str string) int {
	start := strings.Index(str, "(")
	end := strings.Index(str, ")")
	if start != -1 && end != -1 && end > start+1 {
		numStr := str[start+1 : end]
		var num int
		fmt.Sscanf(numStr, "%d", &num)
		return num
	}
	return 255 // valor por defecto
}
