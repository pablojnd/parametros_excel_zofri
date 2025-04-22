<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriDestinos;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriDestinosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'EXT', // Código
                'name' => 'EXTRANJERO', // Nombre
                'description' => 'EXTRANJERO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'ZFE', // Código
                'name' => 'ZONA FRANCA DE EXTENSION', // Nombre
                'description' => 'ZONA FRANCA DE EXTENSION', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'RDP', // Código
                'name' => 'RESTO DEL PAIS', // Nombre
                'description' => 'RESTO DEL PAIS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'OZF', // Código
                'name' => 'OTRA ZONA FRANCA', // Nombre
                'description' => 'OTRA ZONA FRANCA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'ZDE', // Código
                'name' => 'ZONA DE EXPORTACION', // Nombre
                'description' => 'ZONA DE EXPORTACION', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'ZFR', // Código
                'name' => 'ZONA FRANCA', // Nombre
                'description' => 'ZONA FRANCA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriDestinos::insert($data);
    }
}
