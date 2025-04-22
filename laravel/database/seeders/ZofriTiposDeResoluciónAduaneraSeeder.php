<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeResoluciónAduanera;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeResoluciónAduaneraSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'ANULDOCU', // Código
                'name' => 'ANULACIÓN', // Nombre
            ],
            [
                'code' => 'ACTSTOK', // Código
                'name' => 'ACTUALIZACION DE STOCK', // Nombre
            ],
        ];

        Parametros\ZofriTiposDeResoluciónAduanera::insert($data);
    }
}
