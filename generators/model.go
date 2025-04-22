package generators

import (
	"fmt"
	"os"
	"path/filepath"
	"strings"
)

// GenerateModel crea un archivo de modelo de Laravel en la subcarpeta Parametros
func GenerateModel(modelDir string, modelName string, tableName string, headers []string) error {
	modPath := filepath.Join(modelDir, modelName+".php")
	modFile, err := os.Create(modPath)
	if err != nil {
		return err
	}
	defer modFile.Close()

	// Determinar si tiene campo de vigencia
	tieneVigencia := HasVigenciaField(headers)

	// Actualizamos el namespace para incluir Parametros
	imports := "use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;\nuse Illuminate\\Database\\Eloquent\\Model;"
	if tieneVigencia {
		imports += "\nuse App\\Enums\\VigenciaEnum;"
	}

	fmt.Fprintf(modFile, `<?php

namespace App\Models\Parametros;

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
		col := Normalize(h)
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

// HasVigenciaField verifica si hay campo de vigencia
func HasVigenciaField(headers []string) bool {
	for _, h := range headers {
		if strings.ToLower(Normalize(h)) == "vigencia" {
			return true
		}
	}
	return false
}
