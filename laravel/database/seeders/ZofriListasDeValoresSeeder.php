<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriListasDeValores;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriListasDeValoresSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '01', // Código
                'name' => 'Tipos de Vehículos', // Nombre
                'description' => 'Tipos de Vehículos', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '02', // Código
                'name' => 'Tipos de Cabina', // Nombre
                'description' => 'Tipo de Cabina', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '03', // Código
                'name' => 'Colores', // Nombre
                'description' => 'Colores', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '04', // Código
                'name' => 'Marcas de Vehículo', // Nombre
                'description' => 'Marcas de Vehículo', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '05', // Código
                'name' => 'Tipos de Encedido', // Nombre
                'description' => 'Tipos de Encedido', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '06', // Código
                'name' => 'Tipos de Tracción', // Nombre
                'description' => 'Tipos de Tracción', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '07', // Código
                'name' => 'Tipos de Combustible', // Nombre
                'description' => 'Tipos de Combustible', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriListasDeValores::insert($data);
    }
}
