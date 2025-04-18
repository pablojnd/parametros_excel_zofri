<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeClausula;

class TiposDeClausulaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'F',
                'nombre' => 'FOB',
            ],
            [
                'codigo' => 'C',
                'nombre' => 'CIF',
            ],
            [
                'codigo' => 'L',
                'nombre' => 'COSTO Y FLETE',
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeClausula::create($item);
        }
    }
}
