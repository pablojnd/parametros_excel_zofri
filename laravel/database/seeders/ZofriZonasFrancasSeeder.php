<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriZonasFrancas;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriZonasFrancasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '952', // Código
                'name' => 'ZONA FRANCA IQUIQUE', // Nombre
                'description' => 'ZONA FRANCA IQUIQUE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '953', // Código
                'name' => 'ZONA FRANCA PUNTA ARENAS', // Nombre
                'description' => 'ZONA FRANCA PUNTA ARENAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriZonasFrancas::insert($data);
    }
}
