<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeGarantía;

class TiposDeGarantíaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'G',
                'nombre' => 'GLOBAL',
                'descripcion' => 'GARANTIA GLOBAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'O',
                'nombre' => 'OCASIONAL',
                'descripcion' => 'GARANTIA OCASIONAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'D',
                'nombre' => 'DESCONTABLE',
                'descripcion' => 'GARANTIA DESCONTABLE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeGarantía::create($item);
        }
    }
}
