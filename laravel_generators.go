package main

import (
	"fmt"
	"os"
	"path/filepath"

	"github.com/xuri/excelize/v2"
	"github.com/zofri/parametros_excel/generators"
)

// generarArchivosLaravel genera todos los archivos necesarios para Laravel
func generarArchivosLaravel(f *excelize.File, sheets []string, seedDir, migrationDir, modelDir string) {
	// Extraer información de tipos de datos desde el input
	tiposDeCampos := extraerEstructuraCampos()

	// Crear subdirectorio para modelos si no existe
	parametrosModelDir := filepath.Join(modelDir, "Parametros")
	os.MkdirAll(parametrosModelDir, 0755)

	// Crear directorio para recursos Filament
	filamentBaseDir := filepath.Join("laravel", "app", "Filament", "Resources", "Parametros")
	os.MkdirAll(filamentBaseDir, 0755)

	// Guardar nombres de seeders para el DatabaseSeeder
	var seederClassNames []string

	// Colección de información para la migración combinada
	var migraciones []struct {
		ClassName   string
		TableName   string
		Headers     []string
		CamposTabla []map[string]string
	}

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

		className := generators.ToClassName(sheet)
		modelName := "Zofri" + className
		tableName := "zofri_" + generators.Normalize(sheet)

		// Generar Seeder PHP
		seederClassName := "Zofri" + className + "Seeder" // Añadir "Zofri" al nombre del seeder
		if err := generators.GenerateSeeder(seedDir, seederClassName, "Parametros\\"+modelName, headers, dataRows); err != nil {
			fmt.Printf("⚠ Error al generar seeder para %q: %v\n", sheet, err)
		} else {
			seederClassNames = append(seederClassNames, seederClassName)
		}

		// Recopilar información para migración combinada
		migraciones = append(migraciones, struct {
			ClassName   string
			TableName   string
			Headers     []string
			CamposTabla []map[string]string
		}{
			ClassName:   className,
			TableName:   tableName,
			Headers:     headers,
			CamposTabla: camposTabla,
		})

		// Generar Modelo (ahora en subcarpeta Parametros)
		if err := generators.GenerateModel(parametrosModelDir, modelName, tableName, headers); err != nil {
			fmt.Printf("⚠ Error al generar modelo para %q: %v\n", sheet, err)
		}

		// Generar Filament Resource y Páginas
		if err := generators.GenerateFilamentResource(filamentBaseDir, modelName, tableName, headers); err != nil {
			fmt.Printf("⚠ Error al generar recurso Filament para %q: %v\n", sheet, err)
		}
	}

	// Generar una única migración combinada
	if err := generators.GenerateCombinedMigration(migrationDir, migraciones); err != nil {
		fmt.Printf("⚠ Error al generar migración combinada: %v\n", err)
	}

	// Generar el DatabaseSeeder que incluye todos los seeders
	if err := generators.GenerateDatabaseSeeder(seedDir, seederClassNames); err != nil {
		fmt.Printf("⚠ Error al generar DatabaseSeeder: %v\n", err)
	}

	fmt.Println("\n✅ Archivos Laravel generados correctamente")
	fmt.Println("✅ Recursos Filament generados correctamente")
	generators.DisplayCommandHints()
}
