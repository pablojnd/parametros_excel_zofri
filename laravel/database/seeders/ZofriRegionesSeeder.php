<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriRegiones;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriRegionesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '01', // Código
                'name' => '01-REGION DE TARAPACA', // Nombre
            ],
            [
                'code' => '02', // Código
                'name' => '02-REGION DE ANTOFAGASTA', // Nombre
            ],
            [
                'code' => '03', // Código
                'name' => '03-REGION DE ATACAMA', // Nombre
            ],
            [
                'code' => '04', // Código
                'name' => '04-REGION DE COQUIMBO', // Nombre
            ],
            [
                'code' => '05', // Código
                'name' => '05-REGION DE VALPARAISO', // Nombre
            ],
            [
                'code' => '06', // Código
                'name' => '06-REGION DEL GENERAL BERNARDO O HIGGINS', // Nombre
            ],
            [
                'code' => '07', // Código
                'name' => '07-REGION DEL MAULE', // Nombre
            ],
            [
                'code' => '08', // Código
                'name' => '08-REGION DEL BIO BIO', // Nombre
            ],
            [
                'code' => '09', // Código
                'name' => '09-REGION DE LA ARAUCANIA', // Nombre
            ],
            [
                'code' => '10', // Código
                'name' => '10-REGION DE LOS LAGOS', // Nombre
            ],
            [
                'code' => '11', // Código
                'name' => '11-REGION DE COYHAIQUE', // Nombre
            ],
            [
                'code' => '12', // Código
                'name' => '12-REGION DE MAGALLANES', // Nombre
            ],
            [
                'code' => '14', // Código
                'name' => '14-REGION DE LOS RIOS', // Nombre
            ],
            [
                'code' => '15', // Código
                'name' => '15-REGION DE ARICA PARINACOTA', // Nombre
            ],
            [
                'code' => 'RM', // Código
                'name' => 'RM-REGION METROPOLITANA', // Nombre
            ],
        ];

        Parametros\ZofriRegiones::insert($data);
    }
}
