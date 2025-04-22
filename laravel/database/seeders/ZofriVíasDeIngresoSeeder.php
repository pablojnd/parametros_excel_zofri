<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriVíasDeIngreso;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriVíasDeIngresoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'VIAINGR01 ', // Código
                'name' => 'Aplicación', // Nombre
            ],
            [
                'code' => 'VIAINGR02 ', // Código
                'name' => 'Web Service', // Nombre
            ],
            [
                'code' => 'VIAINGR03 ', // Código
                'name' => 'Upload', // Nombre
            ],
            [
                'code' => 'VIAINGR04 ', // Código
                'name' => 'Migracion', // Nombre
            ],
        ];

        Parametros\ZofriVíasDeIngreso::insert($data);
    }
}
