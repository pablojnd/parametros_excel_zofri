<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriVíasDeIngreso;

class VíasDeIngresoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'VIAINGR01 ',
                'nombre' => 'Aplicación',
            ],
            [
                'codigo' => 'VIAINGR02 ',
                'nombre' => 'Web Service',
            ],
            [
                'codigo' => 'VIAINGR03 ',
                'nombre' => 'Upload',
            ],
            [
                'codigo' => 'VIAINGR04 ',
                'nombre' => 'Migracion',
            ],
        ];

        foreach ($data as $item) {
            ZofriVíasDeIngreso::create($item);
        }
    }
}
