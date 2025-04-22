package main

import (
	"bufio"
	"encoding/csv"
	"fmt"
	"os"
	"path/filepath"
	"strings"

	"github.com/xuri/excelize/v2"
	"github.com/zofri/parametros_excel/generators"
)

// processExcelSheets procesa todas las hojas del Excel y genera los archivos correspondientes
func processExcelSheets(f *excelize.File, sheets []string, seedDir, migrationDir, modelDir, csvDir string) {
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

		className := generators.ToClassName(sheet)
		modelName := "Zofri" + className
		tableName := "zofri_" + generators.Normalize(sheet)

		// Generar Seeder PHP
		seederClassName := className + "Seeder"
		if err := generators.GenerateSeeder(seedDir, seederClassName, modelName, headers, dataRows); err != nil {
			fmt.Printf("⚠ Error al generar seeder para %q: %v\n", sheet, err)
		}

		// Generar Migración
		if err := generators.GenerateMigration(migrationDir, className, tableName, headers, camposTabla); err != nil {
			fmt.Printf("⚠ Error al generar migración para %q: %v\n", sheet, err)
		}

		// Generar Modelo
		if err := generators.GenerateModel(modelDir, modelName, tableName, headers); err != nil {
			fmt.Printf("⚠ Error al generar modelo para %q: %v\n", sheet, err)
		}

		// Generar CSV
		csvName := sanitizeFilename(sheet) + ".csv"
		csvPath := filepath.Join(csvDir, csvName)
		if err := generateCSV(csvPath, headers, dataRows); err != nil {
			fmt.Printf("⚠ Error al generar CSV para %q: %v\n", sheet, err)
		} else {
			fmt.Printf("✅ CSV: %s\n", csvPath)
		}
	}
}

// generarArchivosCSV genera solo archivos CSV
func generarArchivosCSV(f *excelize.File, sheets []string, csvDir string) {
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

		// Generar CSV
		csvName := sanitizeFilename(sheet) + ".csv"
		csvPath := filepath.Join(csvDir, csvName)
		if err := generateCSV(csvPath, headers, dataRows); err != nil {
			fmt.Printf("⚠ Error al generar CSV para %q: %v\n", sheet, err)
		} else {
			fmt.Printf("✅ CSV: %s\n", csvPath)
		}
	}

	fmt.Println("\n✅ Archivos CSV generados correctamente")
}

// extraerEstructuraCampos extrae la estructura de campos desde la información proporcionada
func extraerEstructuraCampos() map[string][]map[string]string {
	// Estructura para almacenar parámetros y sus campos
	// La clave es el nombre de la tabla, el valor es una lista de campos
	datos := map[string][]map[string]string{
		"Aduanas": {
			{"campo": "Código", "tipodato": "VARCHAR2(10)", "descripcion": "Código de la Aduana"},
			{"campo": "Nombre", "tipodato": "VARCHAR2(50)", "descripcion": "Nombre de la Aduana"},
			{"campo": "Vigencia", "tipodato": "CHAR(1)", "descripcion": "Vigencia de la Aduana"},
		},
		"Aranceles de Vehículos": {
			{"campo": "Código Arancelario", "tipodato": "VARCHAR2(8)", "descripcion": "Código Arancelario"},
		},
		"Avanzadas Aduaneras": {
			{"campo": "Código", "tipodato": "VARCHAR2(10)", "descripcion": "Código de la Avanzada"},
			{"campo": "Nombre", "tipodato": "VARCHAR2(50)", "descripcion": "Nombre de la Avanzada"},
			{"campo": "Descripción", "tipodato": "VARCHAR2(200)", "descripcion": "Descripción de la Avanzada"},
			{"campo": "Aduana Código", "tipodato": "VARCHAR2(10)", "descripcion": "Código de la Aduana a la cual pertenece la Avanzada Aduanera"},
			{"campo": "Vigencia", "tipodato": "CHAR(1)", "descripcion": "Vigencia de la Avanzada"},
		},
		// Adicionar el resto de tablas aquí...
		"Unidades de Medida": {
			{"campo": "Código", "tipodato": "VARCHAR2(5)", "descripcion": "Código de la Unidad de Medida"},
			{"campo": "Nombre", "tipodato": "VARCHAR2(50)", "descripcion": "Nombre de la Unidad de Medida"},
			{"campo": "Descripción", "tipodato": "VARCHAR2(200)", "descripcion": "Descripción de la Unidad de Medida"},
			{"campo": "Sigla", "tipodato": "VARCHAR2(10)", "descripcion": "Sigla de la Unidad de Medida"},
			{"campo": "Vigencia", "tipodato": "CHAR(1)", "descripcion": "Vigencia de la Unidad de Medida (S o N)"},
		},
	}

	return datos
}

// obtenerCamposTabla obtiene los campos para una tabla específica
func obtenerCamposTabla(nombreTabla string, datos map[string][]map[string]string) []map[string]string {
	// Si no existe la tabla, devolver array vacío
	if campos, existe := datos[nombreTabla]; existe {
		return campos
	}
	return []map[string]string{}
}

// generateCSV genera un archivo CSV con los datos
func generateCSV(csvPath string, headers []string, dataRows [][]string) error {
	csvFile, err := os.Create(csvPath)
	if err != nil {
		return err
	}
	defer csvFile.Close()

	writer := csv.NewWriter(csvFile)

	// encabezados normalizados
	var hdrs []string
	for _, h := range headers {
		hdrs = append(hdrs, normalize(h))
	}
	writer.Write(hdrs)

	// datos
	for _, row := range dataRows {
		if len(row) < len(hdrs) {
			tmp := make([]string, len(hdrs))
			copy(tmp, row)
			row = tmp
		}
		writer.Write(row)
	}

	writer.Flush()
	return nil
}

// generateSummary crea un texto resumen con headers, primeros 5 y total por hoja
func generateSummary(sheets []string, f *excelize.File) error {
	summaryPath := "Listado_de_parametros.txt"
	file, err := os.Create(summaryPath)
	if err != nil {
		return err
	}
	defer file.Close()
	w := bufio.NewWriter(file)

	w.WriteString("========================================\n")
	w.WriteString("        RESUMEN DE HOJAS EXCEL\n")
	w.WriteString("========================================\n\n")

	for _, sheet := range sheets {
		rawRows, err := f.GetRows(sheet)
		if err != nil {
			continue
		}
		rows := trimEmptyRows(rawRows)
		if len(rows) < 2 {
			continue
		}
		headers := rows[0]
		dataRows := rows[1:]
		total := len(dataRows)

		// nombre de la hoja
		w.WriteString(fmt.Sprintf("Hoja: %s\n", sheet))
		// encabezados
		var normHdrs []string
		for _, h := range headers {
			normHdrs = append(normHdrs, normalize(h))
		}
		w.WriteString(fmt.Sprintf("Encabezados: %s\n", strings.Join(normHdrs, ", ")))
		w.WriteString(fmt.Sprintf("Total de registros: %d\n\n", total))

		// primeros 5
		w.WriteString("Primeros 5 registros:\n")
		limit := 5
		if total < 5 {
			limit = total
		}
		for i := 0; i < limit; i++ {
			row := dataRows[i]
			// rellenar si es corto
			if len(row) < len(headers) {
				tmp := make([]string, len(headers))
				copy(tmp, row)
				row = tmp
			}
			w.WriteString(fmt.Sprintf(" %d) %s\n", i+1, strings.Join(row, " | ")))
		}
		w.WriteString("\n----------------------------------------\n\n")
	}

	w.Flush()
	fmt.Printf("✅ Resumen generado: %s\n", summaryPath)
	return nil
}
