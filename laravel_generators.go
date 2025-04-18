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

	// Guardar nombres de seeders para el DatabaseSeeder
	var seederClassNames []string

	for _, sheet := range sheets {
		rawRows, err := f.GetRows(sheet)
		if err != nil {
			fmt.Printf("⚠ No pude leer %q: %v\n", sheet, err)
			continue
		}

		rows := trimEmptyRows(rawRows)
		if len(rows) < 2 {
			fmt.Printf("⚠ %q sin datos, ignorada\n", sheet, err)
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
		seederClassName := "Zofri" + className + "Seeder" // Añadir "Zofri" al nombre del seeder
		if err := generateSeeder(seedDir, seederClassName, modelName, headers, dataRows); err != nil {
			fmt.Printf("⚠ Error al generar seeder para %q: %v\n", sheet, err)
		} else {
			seederClassNames = append(seederClassNames, seederClassName)
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

	// Generar el DatabaseSeeder que incluye todos los seeders
	if err := generateDatabaseSeeder(seedDir, seederClassNames); err != nil {
		fmt.Printf("⚠ Error al generar DatabaseSeeder: %v\n", err)
	}

	fmt.Println("\n✅ Archivos Laravel generados correctamente")
	displayCommandHints()
}

// generateSeeder crea un archivo seeder de Laravel
// con soporte para lotes para evitar problemas de memoria
func generateSeeder(seedDir string, className string, modelName string, headers []string, dataRows [][]string) error {
	seedPath := filepath.Join(seedDir, className+".php")
	seeder, err := os.Create(seedPath)
	if err != nil {
		return err
	}
	defer seeder.Close()

	// Determinar si el seeder es grande (más de 500 filas)
	isLargeSeeder := len(dataRows) > 500
	chunkSize := 100 // Tamaño de cada lote para seeders grandes

	fmt.Fprintf(seeder, `<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\%s;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class %s extends Seeder
{
    public function run()
    {
`, modelName, className)

	// Si es un seeder grande, usar enfoque por lotes con transacciones
	if isLargeSeeder {
		fmt.Fprintln(seeder, "        // Seeder grande - usando enfoque por lotes con transacciones")
		// Corregir esta línea, evitando usar $chunkSize como variable de PHP
		fmt.Fprintf(seeder, "        $this->command->info('Sembrando %s en lotes de %d registros...');\n",
			className, chunkSize)

		// Dividir data en lotes
		for i := 0; i < len(dataRows); i += chunkSize {
			end := i + chunkSize
			if end > len(dataRows) {
				end = len(dataRows)
			}

			fmt.Fprintf(seeder, "\n        // Lote %d de %d\n", (i/chunkSize)+1, (len(dataRows)+chunkSize-1)/chunkSize)
			fmt.Fprintln(seeder, "        DB::transaction(function () {")
			fmt.Fprintln(seeder, "            $data = [")

			// Generar datos para este lote
			for _, row := range dataRows[i:end] {
				fmt.Fprintln(seeder, "                [")
				for j, cell := range row {
					if j < len(headers) {
						key := normalize(headers[j])

						// Manejar campo de vigencia y escapar caracteres especiales
						if strings.ToLower(key) == "vigencia" {
							vigenciaValue := "VigenciaEnum::NO_VIGENTE"
							if strings.ToUpper(cell) == "S" {
								vigenciaValue = "VigenciaEnum::VIGENTE"
							}
							fmt.Fprintf(seeder, "                    '%s' => %s,\n", key, vigenciaValue)
						} else {
							// Escapar comillas y caracteres especiales
							escapedCell := escapeString(cell)
							fmt.Fprintf(seeder, "                    '%s' => '%s',\n", key, escapedCell)
						}
					}
				}
				fmt.Fprintln(seeder, "                ],")
			}

			fmt.Fprintln(seeder, "            ];")
			fmt.Fprintf(seeder, "            foreach ($data as $item) {\n                %s::create($item);\n            }\n", modelName)
			fmt.Fprintln(seeder, "        });")
		}
	} else {
		// Enfoque normal para seeders pequeños
		fmt.Fprintln(seeder, "        $data = [")

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
						// Escapar comillas y caracteres especiales
						escapedCell := escapeString(cell)
						fmt.Fprintf(seeder, "                '%s' => '%s',\n", key, escapedCell)
					}
				}
			}
			fmt.Fprintln(seeder, "            ],")
		}

		fmt.Fprintf(seeder, `        ];

        %s::insert($data);`, modelName)
	}

	fmt.Fprintln(seeder, "\n    }")
	fmt.Fprintln(seeder, "}")

	fmt.Printf("✅ Seeder: %s (%d filas)\n", seedPath, len(dataRows))
	return nil
}

// escapeString escapa caracteres especiales en strings para PHP
func escapeString(s string) string {
	// Reemplazar comillas simples por la secuencia de escape
	s = strings.ReplaceAll(s, "'", "\\'")

	// Eliminar caracteres potencialmente problemáticos o reemplazarlos
	s = strings.ReplaceAll(s, "\r", " ")
	s = strings.ReplaceAll(s, "\n", " ")

	// Manejar otros caracteres especiales si es necesario
	return s
}

// generateMigration crea un archivo de migración de Laravel 12
func generateMigration(migrationDir string, className string, tableName string, headers []string, campos []map[string]string) error {
	timestamp := time.Now().Format("2006_01_02_150405")
	fileName := fmt.Sprintf("%s_create_%s_table.php", timestamp, tableName)
	migPath := filepath.Join(migrationDir, fileName)
	migFile, err := os.Create(migPath)
	if err != nil {
		return err
	}
	defer migFile.Close()

	// Generar descripción de la tabla basada en su nombre
	tableDescription := strings.ReplaceAll(tableName, "zofri_", "")
	tableDescription = strings.ReplaceAll(tableDescription, "_", " ")
	tableDescription = strings.Title(tableDescription)

	fmt.Fprintf(migFile, `<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\VigenciaEnum;

/**
 * Migración para tabla de %s.
 * 
 * Esta tabla almacena información sobre %s en el sistema Zofri.
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('%s', function (Blueprint $table) {
            $table->id();
`, tableDescription, tableDescription, tableName)

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
					tipoDato = fmt.Sprintf("string('%s', %d)", col, maxLen)
				case "NUMBER(4,0)":
					tipoDato = fmt.Sprintf("integer('%s')", col)
				case "CHAR(1)":
					if strings.ToLower(col) == "vigencia" {
						tipoDato = fmt.Sprintf("string('%s', 1)", col)
						nullable = ""
						comentario = " // Utiliza VigenciaEnum para estado de vigencia (S/N)"
					} else {
						tipoDato = fmt.Sprintf("char('%s', 1)", col)
					}
				default:
					tipoDato = fmt.Sprintf("string('%s')", col)
				}

				if campo["descripcion"] != "" {
					if comentario == "" {
						comentario = fmt.Sprintf(" // %s", campo["descripcion"])
					}
				}
				break
			}
		}

		// Si no se encontró información específica, usar valor predeterminado
		if !strings.Contains(tipoDato, "'"+col+"'") {
			tipoDato = fmt.Sprintf("string('%s')", col)
		}

		if strings.ToLower(col) == "vigencia" {
			fmt.Fprintf(migFile, "            $table->%s->default(VigenciaEnum::VIGENTE->value);%s\n",
				tipoDato, comentario)
		} else {
			fmt.Fprintf(migFile, "            $table->%s%s;%s\n",
				tipoDato, nullable, comentario)
		}
	}

	fmt.Fprintf(migFile, `        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('%s');
    }
};
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
    
    // No usar timestamps
    public $timestamps = false;
    
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

// generateDatabaseSeeder crea el DatabaseSeeder que incluye todos los seeders generados
func generateDatabaseSeeder(seedDir string, seederClassNames []string) error {
	seedPath := filepath.Join(seedDir, "DatabaseSeeder.php")
	seeder, err := os.Create(seedPath)
	if err != nil {
		return err
	}
	defer seeder.Close()

	fmt.Fprintf(seeder, `<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuario administrador
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);

        // Para incrementar memoria disponible (si es necesario)
        ini_set('memory_limit', '512M');

        // Parámetros Zofri - Usando un array para mejor mantenibilidad
        $this->call([
`)

	// Agregar cada seeder al array
	for _, seederClassName := range seederClassNames {
		fmt.Fprintf(seeder, "            %s::class,\n", seederClassName)
	}

	fmt.Fprintf(seeder, `        ]);
    }
}
`)

	fmt.Printf("✅ DatabaseSeeder: %s\n", seedPath)
	return nil
}

// displayCommandHints muestra sugerencias de comandos Laravel útiles
func displayCommandHints() {
	fmt.Println("\n📋 Comandos Laravel útiles:")
	fmt.Println("  - Para migrar la base de datos:")
	fmt.Println("    \033[36mphp artisan migrate\033[0m")
	fmt.Println("  - Para ejecutar los seeders (ejecutar uno por uno si hay problemas de memoria):")
	fmt.Println("    \033[36mphp artisan db:seed\033[0m")
	fmt.Println("    \033[36mphp artisan db:seed --class=NombreDelSeeder\033[0m")
	fmt.Println("  - Para incrementar la memoria disponible para PHP:")
	fmt.Println("    \033[36mphp -d memory_limit=512M artisan db:seed\033[0m")
	fmt.Println("  - Para crear un nuevo modelo rápidamente:")
	fmt.Println("    \033[36mphp artisan make:model -m ModelName\033[0m")
	fmt.Println("  - Para regenerar la cache:")
	fmt.Println("    \033[36mphp artisan optimize:clear\033[0m")
}
