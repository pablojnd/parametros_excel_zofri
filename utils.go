package main

import (
	"strings"
	"unicode"
)

// toClassName: "Mi Hoja" -> "MiHoja"
func toClassName(s string) string {
	var parts []string
	for _, w := range strings.FieldsFunc(s, func(r rune) bool {
		return !unicode.IsLetter(r) && !unicode.IsNumber(r)
	}) {
		parts = append(parts, strings.Title(strings.ToLower(w)))
	}
	return strings.Join(parts, "")
}

// normalize convierte a snake_case sin tildes
func normalize(s string) string {
	s = strings.ToLower(s)
	r := strings.NewReplacer(
		"á", "a", "é", "e", "í", "i", "ó", "o", "ú", "u",
		"Á", "a", "É", "e", "Í", "i", "Ó", "o", "Ú", "u",
	)
	s = r.Replace(s)
	s = strings.ReplaceAll(s, " ", "_")
	s = strings.ReplaceAll(s, "-", "_")
	var b strings.Builder
	for _, ch := range s {
		if unicode.IsLetter(ch) || unicode.IsDigit(ch) || ch == '_' {
			b.WriteRune(ch)
		}
	}
	return b.String()
}

// sanitizeFilename para nombres de archivo válidos
func sanitizeFilename(s string) string {
	s = strings.ToLower(s)
	s = strings.ReplaceAll(s, " ", "_")
	s = strings.ReplaceAll(s, "-", "_")
	var b strings.Builder
	for _, ch := range s {
		if unicode.IsLetter(ch) || unicode.IsDigit(ch) || ch == '_' {
			b.WriteRune(ch)
		}
	}
	return b.String()
}

// trimEmptyRows elimina filas iniciales vacías
func trimEmptyRows(rows [][]string) [][]string {
	for i, row := range rows {
		if !isEmptyRow(row) {
			return rows[i:]
		}
	}
	return nil
}

// isEmptyRow verifica si una fila está vacía
func isEmptyRow(row []string) bool {
	for _, c := range row {
		if strings.TrimSpace(c) != "" {
			return false
		}
	}
	return true
}
