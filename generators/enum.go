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
