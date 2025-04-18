<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriCondicionesDeVenta;

class CondicionesDeVentaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'CTDO',
                'nombre' => 'CONTADO',
                'descripcion' => 'CONTADO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'CRED',
                'nombre' => 'CRÉDITO',
                'descripcion' => 'CRÉDITO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriCondicionesDeVenta::create($item);
        }
    }
}
