<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeInventario;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeInventarioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'A', // Código
                'name' => 'ACTUAL', // Nombre
                'description' => 'INVENTARIO ACTUAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'M', // Código
                'name' => 'MESUAL', // Nombre
                'description' => 'INVENTARIO MENSUAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'F', // Código
                'name' => 'FECHA DE CORTE', // Nombre
                'description' => 'INVENTARIO SEGÚN FECHA DE CORTE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriTiposDeInventario::insert($data);
    }
}
