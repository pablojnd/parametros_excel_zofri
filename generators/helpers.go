package generators

import (
	"fmt"
	"strings"
	"unicode"
)

// Mapeo de nombres de campo en español a inglés
// Usado por todas las funciones de generación
var fieldNameMappings = map[string]string{
	// Campos básicos
	"codigo":        "code",
	"nombre":        "name",
	"descripcion":   "description",
	"vigencia":      "is_active",
	"sigla":         "acronym",
	"simbolo":       "symbol",
	"aduana_codigo": "customs_code",
	"id":            "id",

	// Campos específicos
	"etiqueta_impresion":      "print_label",
	"tipo_de_dato_codigo":     "data_type_code",
	"lista_de_valor_codigo":   "value_list_code",
	"enteros":                 "integers",
	"decimales":               "decimals",
	"obligatoriedad":          "is_required",
	"codigo_arancelario":      "tariff_code",
	"descriptor_codigo":       "descriptor_code",
	"unidad_de_medida_codigo": "measure_unit_code",

	// Otros campos comunes
	"fecha":     "date",
	"tipo":      "type",
	"valor":     "value",
	"cantidad":  "quantity",
	"estado":    "status",
	"region":    "region",
	"pais":      "country",
	"direccion": "address",
	"telefono":  "phone",
	"correo":    "email",
}

// EscapeString escapa caracteres especiales en strings para PHP
func EscapeString(s string) string {
	// Reemplazar comillas simples por la secuencia de escape
	s = strings.ReplaceAll(s, "'", "\\'")

	// Eliminar caracteres potencialmente problemáticos o reemplazarlos
	s = strings.ReplaceAll(s, "\r", " ")
	s = strings.ReplaceAll(s, "\n", " ")

	// Manejar otros caracteres especiales si es necesario
	return s
}

// ExtractNumberFromString extrae un número de una cadena VARCHAR2(50) -> 50
func ExtractNumberFromString(str string) int {
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

// ToClassName: "Mi Hoja" -> "MiHoja", "Región" -> "Region"
func ToClassName(s string) string {
	// Primero, normalizar para quitar acentos y caracteres especiales
	s = Normalize(s) // Esto convierte a snake_case y quita acentos

	// Luego, convertir snake_case a CamelCase
	var parts []string
	for _, w := range strings.Split(s, "_") {
		if w != "" { // Evitar partes vacías si hay múltiples underscores
			parts = append(parts, strings.Title(w)) // Convertir a Title case
		}
	}
	return strings.Join(parts, "")
}

// Normalize convierte a snake_case sin tildes
func Normalize(s string) string {
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

// DisplayCommandHints muestra sugerencias de comandos Laravel útiles
func DisplayCommandHints() {
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
	fmt.Println("  - Para acceder al panel de Filament:")
	fmt.Println("    \033[36mhttp://tu-app.test/admin\033[0m")
	fmt.Println("  - Para crear un recurso Filament manualmente:")
	fmt.Println("    \033[36mphp artisan make:filament-resource ModelName --generate\033[0m")
}
