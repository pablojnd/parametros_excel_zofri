<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriEstadosDocumentos;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriEstadosDocumentosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'BORRADOR', // Código
                'name' => 'BORRADOR', // Nombre
                'description' => 'BORRADOR', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'PENDIENTE', // Código
                'name' => 'PENDIENTE DE VISACIÓN', // Nombre
                'description' => 'PENDIENTE DE VISACIÓN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'RECHAZADO', // Código
                'name' => 'RECHAZADO', // Nombre
                'description' => 'RECHAZADO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'ELIMINADO', // Código
                'name' => 'ELIMINADO', // Nombre
                'description' => 'ELIMINADO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'VISADO', // Código
                'name' => 'VISADO', // Nombre
                'description' => 'VISADO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'CONTROLADO', // Código
                'name' => 'CONTROLADO', // Nombre
                'description' => 'CONTROLADO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'ANULADO', // Código
                'name' => 'ANULADO', // Nombre
                'description' => 'ANULADO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'TERMINADO', // Código
                'name' => 'TERMINADO', // Nombre
                'description' => 'TERMINADO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriEstadosDocumentos::insert($data);
    }
}
