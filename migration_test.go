package main

import (
	"fmt"
	"os"
	"testing"
)

// TestMigrationFormat verifica que las migraciones se generen correctamente
func TestMigrationFormat(t *testing.T) {
	// Crear directorio temporal para la prueba
	testDir := "test_migrations"
	os.MkdirAll(testDir, 0755)
	defer os.RemoveAll(testDir)

	// Definir una prueba simple
	tableName := "zofri_test"
	className := "Test"
	headers := []string{"Código", "Nombre", "Vigencia"}
	campos := []map[string]string{
		{"campo": "Código", "tipodato": "VARCHAR2(10)", "descripcion": "Código de prueba"},
		{"campo": "Nombre", "tipodato": "VARCHAR2(50)", "descripcion": "Nombre de prueba"},
		{"campo": "Vigencia", "tipodato": "CHAR(1)", "descripcion": "Estado de vigencia"},
	}

	// Generar migración
	err := generateMigration(testDir, className, tableName, headers, campos)
	if err != nil {
		t.Fatalf("Error generando migración: %v", err)
	}

	// Listar archivos generados
	files, err := os.ReadDir(testDir)
	if err != nil {
		t.Fatalf("Error leyendo directorio: %v", err)
	}

	if len(files) == 0 {
		t.Fatal("No se generó ningún archivo de migración")
	}

	// Leer y verificar el contenido del archivo
	fileName := files[0].Name()
	content, err := os.ReadFile(fmt.Sprintf("%s/%s", testDir, fileName))
	if err != nil {
		t.Fatalf("Error leyendo archivo: %v", err)
	}

	contentStr := string(content)

	// Verificar que contiene estructura de clase anónima
	if !contains(contentStr, "return new class extends Migration") {
		t.Error("La migración no utiliza clase anónima (estilo Laravel 12)")
	}

	// Verificar campos
	if !contains(contentStr, "$table->string('codigo', 10)") {
		t.Error("El campo 'codigo' no está correctamente definido")
	}

	if !contains(contentStr, "$table->string('nombre', 50)") {
		t.Error("El campo 'nombre' no está correctamente definido")
	}

	if !contains(contentStr, "$table->string('vigencia', 1)->default(VigenciaEnum::VIGENTE->value)") {
		t.Error("El campo 'vigencia' no está correctamente definido con enum")
	}

	fmt.Println("✅ Prueba completada: Formato de migraciones verificado")
}

// Helper function para verificar si una cadena contiene otra
func contains(s, substr string) bool {
	return len(s) >= len(substr) && s[len(s)-len(substr):] == substr
}
