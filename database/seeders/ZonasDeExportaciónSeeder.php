<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriZonasDeExportación;

class ZonasDeExportaciónSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '1',
                'nombre' => 'SOPRODI S.A. ARICA',
                'descripcion' => 'SOPRODI S.A. ARICA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriZonasDeExportación::create($item);
        }
    }
}
