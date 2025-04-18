<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriRegiones;

class RegionesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '01',
                'nombre' => '01-REGION DE TARAPACA',
            ],
            [
                'codigo' => '02',
                'nombre' => '02-REGION DE ANTOFAGASTA',
            ],
            [
                'codigo' => '03',
                'nombre' => '03-REGION DE ATACAMA',
            ],
            [
                'codigo' => '04',
                'nombre' => '04-REGION DE COQUIMBO',
            ],
            [
                'codigo' => '05',
                'nombre' => '05-REGION DE VALPARAISO',
            ],
            [
                'codigo' => '06',
                'nombre' => '06-REGION DEL GENERAL BERNARDO O HIGGINS',
            ],
            [
                'codigo' => '07',
                'nombre' => '07-REGION DEL MAULE',
            ],
            [
                'codigo' => '08',
                'nombre' => '08-REGION DEL BIO BIO',
            ],
            [
                'codigo' => '09',
                'nombre' => '09-REGION DE LA ARAUCANIA',
            ],
            [
                'codigo' => '10',
                'nombre' => '10-REGION DE LOS LAGOS',
            ],
            [
                'codigo' => '11',
                'nombre' => '11-REGION DE COYHAIQUE',
            ],
            [
                'codigo' => '12',
                'nombre' => '12-REGION DE MAGALLANES',
            ],
            [
                'codigo' => '14',
                'nombre' => '14-REGION DE LOS RIOS',
            ],
            [
                'codigo' => '15',
                'nombre' => '15-REGION DE ARICA PARINACOTA',
            ],
            [
                'codigo' => 'RM',
                'nombre' => 'RM-REGION METROPOLITANA',
            ],
        ];

        foreach ($data as $item) {
            ZofriRegiones::create($item);
        }
    }
}
