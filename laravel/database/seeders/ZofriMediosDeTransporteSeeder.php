<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriMediosDeTransporte;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriMediosDeTransporteSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '1', // Código
                'name' => 'MARITIMA,FLUVIAL Y L', // Nombre
                'description' => 'MARITIMA,FLUVIAL Y L', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '2', // Código
                'name' => 'FLUVIAL', // Nombre
                'description' => 'FLUVIAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '3', // Código
                'name' => 'LACUSTRE', // Nombre
                'description' => 'LACUSTRE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '4', // Código
                'name' => 'AEREO', // Nombre
                'description' => 'AEREO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '5', // Código
                'name' => 'POSTAL', // Nombre
                'description' => 'POSTAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '6', // Código
                'name' => 'FERROVIARIO', // Nombre
                'description' => 'FERROVIARIO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '7', // Código
                'name' => 'CARRETERO/TERRESTRE', // Nombre
                'description' => 'CARRETERO/TERRESTRE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '8', // Código
                'name' => 'OLEODUCTOS,GASODUCTO', // Nombre
                'description' => 'OLEODUCTOS,GASODUCTO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '9', // Código
                'name' => 'TENDIDO ELECTRICO', // Nombre
                'description' => 'TENDIDO ELECTRICO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '10', // Código
                'name' => 'OTRA', // Nombre
                'description' => 'OTRA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '11', // Código
                'name' => 'DUCTO SUBMARINO', // Nombre
                'description' => 'DUCTO SUBMARINO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriMediosDeTransporte::insert($data);
    }
}
