<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeGarantía;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeGarantíaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'G', // Código
                'name' => 'GLOBAL', // Nombre
                'description' => 'GARANTIA GLOBAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'O', // Código
                'name' => 'OCASIONAL', // Nombre
                'description' => 'GARANTIA OCASIONAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'D', // Código
                'name' => 'DESCONTABLE', // Nombre
                'description' => 'GARANTIA DESCONTABLE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriTiposDeGarantía::insert($data);
    }
}
