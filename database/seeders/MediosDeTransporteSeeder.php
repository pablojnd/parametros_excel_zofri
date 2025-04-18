<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriMediosDeTransporte;

class MediosDeTransporteSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '1',
                'nombre' => 'MARITIMA,FLUVIAL Y L',
                'descripcion' => 'MARITIMA,FLUVIAL Y L',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '2',
                'nombre' => 'FLUVIAL',
                'descripcion' => 'FLUVIAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '3',
                'nombre' => 'LACUSTRE',
                'descripcion' => 'LACUSTRE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '4',
                'nombre' => 'AEREO',
                'descripcion' => 'AEREO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '5',
                'nombre' => 'POSTAL',
                'descripcion' => 'POSTAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '6',
                'nombre' => 'FERROVIARIO',
                'descripcion' => 'FERROVIARIO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '7',
                'nombre' => 'CARRETERO/TERRESTRE',
                'descripcion' => 'CARRETERO/TERRESTRE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '8',
                'nombre' => 'OLEODUCTOS,GASODUCTO',
                'descripcion' => 'OLEODUCTOS,GASODUCTO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '9',
                'nombre' => 'TENDIDO ELECTRICO',
                'descripcion' => 'TENDIDO ELECTRICO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '10',
                'nombre' => 'OTRA',
                'descripcion' => 'OTRA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '11',
                'nombre' => 'DUCTO SUBMARINO',
                'descripcion' => 'DUCTO SUBMARINO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriMediosDeTransporte::create($item);
        }
    }
}
