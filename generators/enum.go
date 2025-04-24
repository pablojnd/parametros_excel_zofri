package generators

import (
	"fmt"
	"os"
	"path/filepath"
)

// GenerateEnums genera los archivos de enumeraciones
func GenerateEnums(enumDir string) error {
	// Generar VigenciaEnum
	enumPath := filepath.Join(enumDir, "VigenciaEnum.php")
	enumFile, err := os.Create(enumPath)
	if err != nil {
		return err
	}
	defer enumFile.Close()

	fmt.Fprintf(enumFile, `<?php

namespace App\Enums;

/**
 * Enum para manejar el estado de vigencia (activo/inactivo)
 * Se mapea a un booleano en la base de datos (1 = true, 0 = false)
 */
enum VigenciaEnum: int
{
    case VIGENTE = 1;    // Registro activo (true en DB)
    case NO_VIGENTE = 0; // Registro inactivo (false en DB)
    
    /**
     * Obtiene la etiqueta legible del estado
     */
    public function label(): string
    {
        return match($this) {
            self::VIGENTE => 'Activo',
            self::NO_VIGENTE => 'Inactivo',
        };
    }
    
    /**
     * Verifica si el estado es activo/vigente
     */
    public function isActive(): bool
    {
        return $this === self::VIGENTE;
    }

    /**
     * Convierte el valor del enum a booleano para la base de datos.
     */
    public function toBoolean(): bool
    {
        return $this === self::VIGENTE;
    }

    /**
     * Crea una instancia del enum desde un valor booleano.
     */
    public static function fromBoolean(bool $value): self
    {
        return $value ? self::VIGENTE : self::NO_VIGENTE;
    }
}
`)

	fmt.Printf("✅ Enum: %s\n", enumPath)
	return nil
}
