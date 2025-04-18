<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeCertificado;

class TiposDeCertificadoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'M',
                'nombre' => 'MANUAL',
            ],
            [
                'codigo' => 'E',
                'nombre' => 'ELECTRONICO',
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeCertificado::create($item);
        }
    }
}
