package generators

import (
	"fmt"
	"os"
	"path/filepath"
	"strings"
)

// GenerateSeeder crea un archivo seeder de Laravel
// con soporte para lotes para evitar problemas de memoria
func GenerateSeeder(seedDir string, className string, modelName string, headers []string, dataRows [][]string) error {
	seedPath := filepath.Join(seedDir, className+".php")
	seeder, err := os.Create(seedPath)
	if err != nil {
		return err
	}
	defer seeder.Close()

	// Determinar si el seeder es grande (más de 500 filas)
	isLargeSeeder := len(dataRows) > 500
	chunkSize := 100 // Tamaño de cada lote para seeders grandes

	fmt.Fprintf(seeder, `<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\%s;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class %s extends Seeder
{
    public function run()
    {
`, modelName, className)

	// Si es un seeder grande, usar enfoque por lotes con transacciones
	if isLargeSeeder {
		fmt.Fprintln(seeder, "        // Seeder grande - usando enfoque por lotes con transacciones")
		fmt.Fprintf(seeder, "        $this->command->info('Sembrando %s en lotes de %d registros...');\n",
			className, chunkSize)

		// Dividir data en lotes
		for i := 0; i < len(dataRows); i += chunkSize {
			end := i + chunkSize
			if end > len(dataRows) {
				end = len(dataRows)
			}

			fmt.Fprintf(seeder, "\n        // Lote %d de %d\n", (i/chunkSize)+1, (len(dataRows)+chunkSize-1)/chunkSize)
			fmt.Fprintln(seeder, "        DB::transaction(function () {")
			fmt.Fprintln(seeder, "            $data = [")

			// Generar datos para este lote
			for _, row := range dataRows[i:end] {
				fmt.Fprintln(seeder, "                [")
				for j, cell := range row {
					if j < len(headers) {
						key := Normalize(headers[j])

						// Manejar campo de vigencia y escapar caracteres especiales
						if strings.ToLower(key) == "vigencia" {
							vigenciaValue := "VigenciaEnum::NO_VIGENTE"
							if strings.ToUpper(cell) == "S" {
								vigenciaValue = "VigenciaEnum::VIGENTE"
							}
							fmt.Fprintf(seeder, "                    '%s' => %s,\n", key, vigenciaValue)
						} else {
							// Escapar comillas y caracteres especiales
							escapedCell := EscapeString(cell)
							fmt.Fprintf(seeder, "                    '%s' => '%s',\n", key, escapedCell)
						}
					}
				}
				fmt.Fprintln(seeder, "                ],")
			}

			fmt.Fprintln(seeder, "            ];")
			fmt.Fprintf(seeder, "            foreach ($data as $item) {\n                %s::create($item);\n            }\n", modelName)
			fmt.Fprintln(seeder, "        });")
		}
	} else {
		// Enfoque normal para seeders pequeños
		fmt.Fprintln(seeder, "        $data = [")

		for _, row := range dataRows {
			fmt.Fprintln(seeder, "            [")
			for i, cell := range row {
				if i < len(headers) {
					key := Normalize(headers[i])

					// Manejo especial para campo de vigencia
					if strings.ToLower(key) == "vigencia" {
						vigenciaValue := "VigenciaEnum::NO_VIGENTE"
						if strings.ToUpper(cell) == "S" {
							vigenciaValue = "VigenciaEnum::VIGENTE"
						}
						fmt.Fprintf(seeder, "                '%s' => %s,\n", key, vigenciaValue)
					} else {
						// Escapar comillas y caracteres especiales
						escapedCell := EscapeString(cell)
						fmt.Fprintf(seeder, "                '%s' => '%s',\n", key, escapedCell)
					}
				}
			}
			fmt.Fprintln(seeder, "            ],")
		}

		fmt.Fprintf(seeder, `        ];

        %s::insert($data);`, modelName)
	}

	fmt.Fprintln(seeder, "\n    }")
	fmt.Fprintln(seeder, "}")

	fmt.Printf("✅ Seeder: %s (%d filas)\n", seedPath, len(dataRows))
	return nil
}

// GenerateDatabaseSeeder crea el DatabaseSeeder que incluye todos los seeders generados
func GenerateDatabaseSeeder(seedDir string, seederClassNames []string) error {
	seedPath := filepath.Join(seedDir, "DatabaseSeeder.php")
	seeder, err := os.Create(seedPath)
	if err != nil {
		return err
	}
	defer seeder.Close()

	fmt.Fprintf(seeder, `<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuario administrador
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);

        // Para incrementar memoria disponible (si es necesario)
        ini_set('memory_limit', '512M');

        // Parámetros Zofri - Usando un array para mejor mantenibilidad
        $this->call([
`)

	// Agregar cada seeder al array
	for _, seederClassName := range seederClassNames {
		fmt.Fprintf(seeder, "            %s::class,\n", seederClassName)
	}

	fmt.Fprintf(seeder, `        ]);
    }
}
`)

	fmt.Printf("✅ DatabaseSeeder: %s\n", seedPath)
	return nil
}
