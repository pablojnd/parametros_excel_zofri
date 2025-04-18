<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeResoluciónAduanera;

class TiposDeResoluciónAduaneraSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'ANULDOCU',
                'nombre' => 'ANULACIÓN',
            ],
            [
                'codigo' => 'ACTSTOK',
                'nombre' => 'ACTUALIZACION DE STOCK',
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeResoluciónAduanera::create($item);
        }
    }
}
