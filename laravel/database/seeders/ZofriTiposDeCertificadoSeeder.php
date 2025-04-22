<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeCertificado;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeCertificadoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'M', // Código
                'name' => 'MANUAL', // Nombre
            ],
            [
                'code' => 'E', // Código
                'name' => 'ELECTRONICO', // Nombre
            ],
        ];

        Parametros\ZofriTiposDeCertificado::insert($data);
    }
}
