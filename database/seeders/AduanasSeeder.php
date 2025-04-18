<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriAduanas;

class AduanasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '3',
                'nombre' => 'ARICA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '7',
                'nombre' => 'IQUIQUE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '10',
                'nombre' => 'TOCOPILLA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '14',
                'nombre' => 'ANTOFAGASTA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '17',
                'nombre' => 'CHAÑARAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '25',
                'nombre' => 'COQUIMBO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '33',
                'nombre' => 'LOS ANDES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '34',
                'nombre' => 'VALPARAÍSO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '39',
                'nombre' => 'SAN ANTONIO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '48',
                'nombre' => 'METROPOLITANA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '55',
                'nombre' => 'TALCAHUANO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '67',
                'nombre' => 'OSORNO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '69',
                'nombre' => 'PUERTO MONTT',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '83',
                'nombre' => 'COYHAIQUE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '90',
                'nombre' => 'PUERTO AYSEN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '92',
                'nombre' => 'PUNTA ARENAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '98',
                'nombre' => 'DIRECCION NACIONAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriAduanas::create($item);
        }
    }
}
