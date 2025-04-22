<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriCondicionesDeVenta;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriCondicionesDeVentaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'CTDO', // Código
                'name' => 'CONTADO', // Nombre
                'description' => 'CONTADO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'CRED', // Código
                'name' => 'CRÉDITO', // Nombre
                'description' => 'CRÉDITO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriCondicionesDeVenta::insert($data);
    }
}
