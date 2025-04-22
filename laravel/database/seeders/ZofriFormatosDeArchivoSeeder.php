<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriFormatosDeArchivo;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriFormatosDeArchivoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'PDF', // Código
                'name' => 'PDF', // Nombre
            ],
            [
                'code' => 'CSV', // Código
                'name' => 'EXCEL', // Nombre
            ],
            [
                'code' => 'XML', // Código
                'name' => 'XML', // Nombre
            ],
        ];

        Parametros\ZofriFormatosDeArchivo::insert($data);
    }
}
