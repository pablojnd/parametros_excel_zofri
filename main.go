package main

import (
	"bufio"
	"fmt"
	"os"
	"strings"

	"github.com/xuri/excelize/v2"
	"github.com/zofri/parametros_excel/generators"
)

func main() {
	inputFile := "sve_estructura_de_parametros.xlsx"

	// 1) Abrimos el Excel
	f, err := excelize.OpenFile(inputFile)
	if err != nil {
		fmt.Fprintf(os.Stderr, "Error al abrir %s: %v\n", inputFile, err)
		os.Exit(1)
	}

	// 2) Filtramos las hojas (omitimos las que contienen "COEX" y otras hojas específicas)
	allSheets := f.GetSheetList()
	var sheets []string
	hojasFiltradas := map[string]bool{
		"Portada":                         true,
		"Historia de Revisiones":          true,
		"Indice Parámetros Coexistencia":  true,
		"Indice Parámetros Post Coexiste": true,
		"Estructura de Parámetros":        true,
	}

	for _, sh := range allSheets {
		if strings.Contains(strings.ToUpper(sh), "COEX") {
			continue
		}
		if hojasFiltradas[sh] {
			continue
		}
		sheets = append(sheets, sh)
	}

	// 3) Pregunta al usuario
	reader := bufio.NewReader(os.Stdin)
	fmt.Println("\n=== PROCESADOR DE PARÁMETROS EXCEL ===")
	fmt.Println("\n¿Qué deseas hacer?")
	fmt.Println("  1) Generar archivos Laravel (seeders, migraciones, modelos)")
	fmt.Println("  2) Generar archivos CSV")
	fmt.Println("  3) Generar resumen de hojas en un único .txt")
	fmt.Println("  4) Mostrar listado de hojas")
	fmt.Print("> ")
	choice, _ := reader.ReadString('\n')
	choice = strings.TrimSpace(choice)

	switch choice {
	case "4": // Mostrar listado de hojas
		mostrarListadoHojas(sheets)
		return

	case "3": // Generar resumen
		if err := generateSummary(sheets, f); err != nil {
			fmt.Fprintf(os.Stderr, "Error al generar resumen: %v\n", err)
			os.Exit(1)
		}
		return

	case "2": // Generar solo CSV
		csvDir := "output_csv"
		os.MkdirAll(csvDir, 0755)
		generarArchivosCSV(f, sheets, csvDir)
		return

	case "1": // Generar archivos Laravel
		// Creamos carpetas de salida
		seedDir := "database/seeders"
		migrationDir := "database/migrations"
		modelDir := "app/Models"
		enumDir := "app/Enums"

		os.MkdirAll(seedDir, 0755)
		os.MkdirAll(migrationDir, 0755)
		os.MkdirAll(modelDir, 0755)
		os.MkdirAll(enumDir, 0755)
		os.MkdirAll(modelDir+"/Parametros", 0755) // Crear subdirectorio para modelos de parámetros

		// Generamos los enums primero
		generators.GenerateEnums(enumDir)

		// Procesamos las hojas del Excel para Laravel
		generarArchivosLaravel(f, sheets, seedDir, migrationDir, modelDir)

		fmt.Println("\n\033[32m🚀 Todos los archivos Laravel han sido generados correctamente\033[0m")
		fmt.Println("\033[33mRecuerda copiar estos archivos a tu proyecto Laravel antes de ejecutar las migraciones y seeders\033[0m")
		return

	default:
		fmt.Println("Opción no válida, saliendo.")
		return
	}
}

// mostrarListadoHojas muestra la lista de hojas disponibles
func mostrarListadoHojas(sheets []string) {
	fmt.Println("\nHojas disponibles (sin COEX ni hojas de sistema):")
	for i, sh := range sheets {
		fmt.Printf(" %2d) %s\n", i+1, sh)
	}
	fmt.Printf("\nTotal: %d hojas\n", len(sheets))
}
