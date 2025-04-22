<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriZonasFrancasDeExtensión;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriZonasFrancasDeExtensiónSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '80', // Código
                'name' => 'ARICA  ', // Nombre
                'description' => 'ARICA  ', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '81', // Código
                'name' => 'IQUIQUE  ', // Nombre
                'description' => 'IQUIQUE  ', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriZonasFrancasDeExtensión::insert($data);
    }
}
