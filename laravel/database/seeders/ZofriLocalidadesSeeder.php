<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriLocalidades;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriLocalidadesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'IQQ', // Código
                'name' => 'IQUIQUE', // Nombre
                'description' => 'IQUIQUE', // Descripción
                'customs_code' => '7', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'AHO', // Código
                'name' => 'ALTO HOSPOCIO', // Nombre
                'description' => 'ALTO HOSPOCIO', // Descripción
                'customs_code' => '7', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'ARI', // Código
                'name' => 'ARICA', // Nombre
                'description' => 'ARICA', // Descripción
                'customs_code' => '3', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriLocalidades::insert($data);
    }
}
