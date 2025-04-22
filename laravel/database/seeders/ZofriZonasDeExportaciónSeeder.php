<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriZonasDeExportación;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriZonasDeExportaciónSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '1', // Código
                'name' => 'SOPRODI S.A. ARICA', // Nombre
                'description' => 'SOPRODI S.A. ARICA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriZonasDeExportación::insert($data);
    }
}
