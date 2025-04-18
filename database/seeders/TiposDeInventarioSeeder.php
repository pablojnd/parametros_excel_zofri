<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeInventario;

class TiposDeInventarioSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'A',
                'nombre' => 'ACTUAL',
                'descripcion' => 'INVENTARIO ACTUAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'M',
                'nombre' => 'MESUAL',
                'descripcion' => 'INVENTARIO MENSUAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'F',
                'nombre' => 'FECHA DE CORTE',
                'descripcion' => 'INVENTARIO SEGÚN FECHA DE CORTE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeInventario::create($item);
        }
    }
}
