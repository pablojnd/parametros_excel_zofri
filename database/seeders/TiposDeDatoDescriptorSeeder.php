<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeDatoDescriptor;

class TiposDeDatoDescriptorSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'NUME',
                'nombre' => 'Numérico',
            ],
            [
                'codigo' => 'ALFANUM',
                'nombre' => 'Alfa numérico',
            ],
            [
                'codigo' => 'FECHA',
                'nombre' => 'Fecha',
            ],
            [
                'codigo' => 'LISTA',
                'nombre' => 'Lista',
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeDatoDescriptor::create($item);
        }
    }
}
