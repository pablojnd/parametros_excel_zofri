<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriZonasFrancas;

class ZonasFrancasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '952',
                'nombre' => 'ZONA FRANCA IQUIQUE',
                'descripcion' => 'ZONA FRANCA IQUIQUE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '953',
                'nombre' => 'ZONA FRANCA PUNTA ARENAS',
                'descripcion' => 'ZONA FRANCA PUNTA ARENAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriZonasFrancas::create($item);
        }
    }
}
