<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriFormatosDeArchivo;

class FormatosDeArchivoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'PDF',
                'nombre' => 'PDF',
            ],
            [
                'codigo' => 'CSV',
                'nombre' => 'EXCEL',
            ],
            [
                'codigo' => 'XML',
                'nombre' => 'XML',
            ],
        ];

        foreach ($data as $item) {
            ZofriFormatosDeArchivo::create($item);
        }
    }
}
