<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriListasDeValores;

class ListasDeValoresSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '01',
                'nombre' => 'Tipos de Vehículos',
                'descripcion' => 'Tipos de Vehículos',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '02',
                'nombre' => 'Tipos de Cabina',
                'descripcion' => 'Tipo de Cabina',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '03',
                'nombre' => 'Colores',
                'descripcion' => 'Colores',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '04',
                'nombre' => 'Marcas de Vehículo',
                'descripcion' => 'Marcas de Vehículo',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '05',
                'nombre' => 'Tipos de Encedido',
                'descripcion' => 'Tipos de Encedido',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '06',
                'nombre' => 'Tipos de Tracción',
                'descripcion' => 'Tipos de Tracción',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '07',
                'nombre' => 'Tipos de Combustible',
                'descripcion' => 'Tipos de Combustible',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriListasDeValores::create($item);
        }
    }
}
