<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriLocalidades;

class LocalidadesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'IQQ',
                'nombre' => 'IQUIQUE',
                'descripcion' => 'IQUIQUE',
                'aduana_codigo' => '7',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'AHO',
                'nombre' => 'ALTO HOSPOCIO',
                'descripcion' => 'ALTO HOSPOCIO',
                'aduana_codigo' => '7',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'ARI',
                'nombre' => 'ARICA',
                'descripcion' => 'ARICA',
                'aduana_codigo' => '3',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriLocalidades::create($item);
        }
    }
}
