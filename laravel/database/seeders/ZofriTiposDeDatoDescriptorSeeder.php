<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeDatoDescriptor;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeDatoDescriptorSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'NUME', // Código
                'name' => 'Numérico', // Nombre
            ],
            [
                'code' => 'ALFANUM', // Código
                'name' => 'Alfa numérico', // Nombre
            ],
            [
                'code' => 'FECHA', // Código
                'name' => 'Fecha', // Nombre
            ],
            [
                'code' => 'LISTA', // Código
                'name' => 'Lista', // Nombre
            ],
        ];

        Parametros\ZofriTiposDeDatoDescriptor::insert($data);
    }
}
