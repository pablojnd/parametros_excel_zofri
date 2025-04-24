package generators

import (
	"fmt"
	"os"
	"path/filepath"
	"strings"
	"time"
)

// GenerateMigration crea un archivo de migración de Laravel 12 (mantenido por compatibilidad)
func GenerateMigration(migrationDir string, className string, tableName string, headers []string, campos []map[string]string) error {
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
		col := Normalize(h)
		// Convertir nombre del campo a inglés si existe en el mapeo
		englishFieldName := col
		if en, exists := fieldNameMappings[col]; exists {
			englishFieldName = en
		}

		// Buscar el tipo de dato y descripción en campos
		tipoDato := "string"
		nullable := "->nullable()"
		comentario := " // " + h // Por defecto, el comentario es el nombre original del campo

		for _, campo := range campos {
			if strings.EqualFold(campo["campo"], h) {
				switch strings.ToUpper(campo["tipodato"]) {
				case "VARCHAR2(10)", "VARCHAR2(40)", "VARCHAR2(50)", "VARCHAR2(60)", "VARCHAR2(100)", "VARCHAR2(200)":
					maxLen := ExtractNumberFromString(campo["tipodato"])
					tipoDato = fmt.Sprintf("string('%s', %d)", englishFieldName, maxLen)
				case "NUMBER(4,0)":
					tipoDato = fmt.Sprintf("integer('%s')", englishFieldName)
				case "CHAR(1)":
					if strings.ToLower(col) == "vigencia" {
						tipoDato = fmt.Sprintf("boolean('%s')", englishFieldName)
						nullable = ""
						comentario = " // Vigencia (true/false) - Indica si el registro está activo"
					} else {
						tipoDato = fmt.Sprintf("char('%s', 1)", englishFieldName)
					}
				default:
					tipoDato = fmt.Sprintf("string('%s')", englishFieldName)
				}

				if campo["descripcion"] != "" {
					comentario = fmt.Sprintf(" // %s", campo["descripcion"])
				}
				break
			}
		}

		// Si no se encontró información específica, usar valor predeterminado
		if !strings.Contains(tipoDato, "'"+englishFieldName+"'") {
			tipoDato = fmt.Sprintf("string('%s')", englishFieldName)
		}

		if strings.ToLower(col) == "vigencia" {
			fmt.Fprintf(migFile, "            $table->%s->default(true);%s\n",
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

// GenerateCombinedMigration crea un único archivo de migración que contiene todas las tablas
func GenerateCombinedMigration(migrationDir string, migraciones []struct {
	ClassName   string
	TableName   string
	Headers     []string
	CamposTabla []map[string]string
}) error {
	timestamp := time.Now().Format("2006_01_02_150405")
	fileName := fmt.Sprintf("%s_create_zofri_parametros_tables.php", timestamp)
	migPath := filepath.Join(migrationDir, fileName)
	migFile, err := os.Create(migPath)
	if err != nil {
		return err
	}
	defer migFile.Close()

	// Cabecera de la migración
	fmt.Fprintf(migFile, `<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\VigenciaEnum;

/**
 * Migración combinada para todas las tablas de parámetros Zofri.
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
`)

	// Generar código para cada tabla
	for _, mig := range migraciones {
		// Generar descripción de la tabla basada en su nombre
		tableDescription := strings.ReplaceAll(mig.TableName, "zofri_", "")
		tableDescription = strings.ReplaceAll(tableDescription, "_", " ")
		tableDescription = strings.Title(tableDescription)

		fmt.Fprintf(migFile, "        // %s\n", tableDescription)
		fmt.Fprintf(migFile, "        Schema::create('%s', function (Blueprint $table) {\n", mig.TableName)
		fmt.Fprintf(migFile, "            $table->id();\n")

		// Definir campos para esta tabla
		for _, h := range mig.Headers {
			col := Normalize(h)
			// Convertir nombre del campo a inglés si existe en el mapeo
			englishFieldName := col
			if en, exists := fieldNameMappings[col]; exists {
				englishFieldName = en
			}

			// Buscar el tipo de dato y descripción en campos
			tipoDato := "string"
			nullable := "->nullable()"
			comentario := " // " + h // Por defecto, el comentario es el nombre original del campo

			for _, campo := range mig.CamposTabla {
				if strings.EqualFold(campo["campo"], h) {
					switch strings.ToUpper(campo["tipodato"]) {
					case "VARCHAR2(10)", "VARCHAR2(40)", "VARCHAR2(50)", "VARCHAR2(60)", "VARCHAR2(100)", "VARCHAR2(200)":
						maxLen := ExtractNumberFromString(campo["tipodato"])
						tipoDato = fmt.Sprintf("string('%s', %d)", englishFieldName, maxLen)
					case "NUMBER(4,0)":
						tipoDato = fmt.Sprintf("integer('%s')", englishFieldName)
					case "CHAR(1)":
						if strings.ToLower(col) == "vigencia" {
							tipoDato = fmt.Sprintf("boolean('%s')", englishFieldName)
							nullable = ""
							comentario = " // Vigencia (true/false) - Indica si el registro está activo"
						} else {
							tipoDato = fmt.Sprintf("char('%s', 1)", englishFieldName)
						}
					default:
						tipoDato = fmt.Sprintf("string('%s')", englishFieldName)
					}

					if campo["descripcion"] != "" {
						comentario = fmt.Sprintf(" // %s", campo["descripcion"])
					}
					break
				}
			}

			// Si no se encontró información específica, usar valor predeterminado
			if !strings.Contains(tipoDato, "'"+englishFieldName+"'") {
				tipoDato = fmt.Sprintf("string('%s')", englishFieldName)
			}

			if strings.ToLower(col) == "vigencia" {
				fmt.Fprintf(migFile, "            $table->%s->default(true);%s\n",
					tipoDato, comentario)
			} else {
				fmt.Fprintf(migFile, "            $table->%s%s;%s\n",
					tipoDato, nullable, comentario)
			}
		}

		fmt.Fprintf(migFile, "        });\n\n")
	}

	// Método down para eliminar todas las tablas
	fmt.Fprintf(migFile, `    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
`)

	// Eliminar cada tabla en orden inverso
	for i := len(migraciones) - 1; i >= 0; i-- {
		fmt.Fprintf(migFile, "        Schema::dropIfExists('%s');\n", migraciones[i].TableName)
	}

	fmt.Fprintf(migFile, `    }
};
`)

	fmt.Printf("✅ Migración combinada: %s\n", migPath)
	return nil
}
