<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeContenedor;

class TiposDeContenedorSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'TCON_CONT',
                'nombre' => 'CONTENEDOR',
            ],
            [
                'codigo' => 'TCON_CAMI',
                'nombre' => 'CAMION',
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeContenedor::create($item);
        }
    }
}
