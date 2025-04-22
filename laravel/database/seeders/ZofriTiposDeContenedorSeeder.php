<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeContenedor;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeContenedorSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'TCON_CONT', // Código
                'name' => 'CONTENEDOR', // Nombre
            ],
            [
                'code' => 'TCON_CAMI', // Código
                'name' => 'CAMION', // Nombre
            ],
        ];

        Parametros\ZofriTiposDeContenedor::insert($data);
    }
}
