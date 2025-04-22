<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeClausula;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeClausulaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'F', // Código
                'name' => 'FOB', // Nombre
            ],
            [
                'code' => 'C', // Código
                'name' => 'CIF', // Nombre
            ],
            [
                'code' => 'L', // Código
                'name' => 'COSTO Y FLETE', // Nombre
            ],
        ];

        Parametros\ZofriTiposDeClausula::insert($data);
    }
}
