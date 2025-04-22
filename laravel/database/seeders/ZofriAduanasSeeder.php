<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriAduanas;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriAduanasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '3', // Código
                'name' => 'ARICA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '7', // Código
                'name' => 'IQUIQUE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '10', // Código
                'name' => 'TOCOPILLA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '14', // Código
                'name' => 'ANTOFAGASTA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '17', // Código
                'name' => 'CHAÑARAL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '25', // Código
                'name' => 'COQUIMBO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '33', // Código
                'name' => 'LOS ANDES', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '34', // Código
                'name' => 'VALPARAÍSO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '39', // Código
                'name' => 'SAN ANTONIO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '48', // Código
                'name' => 'METROPOLITANA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '55', // Código
                'name' => 'TALCAHUANO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '67', // Código
                'name' => 'OSORNO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '69', // Código
                'name' => 'PUERTO MONTT', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '83', // Código
                'name' => 'COYHAIQUE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '90', // Código
                'name' => 'PUERTO AYSEN', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '92', // Código
                'name' => 'PUNTA ARENAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '98', // Código
                'name' => 'DIRECCION NACIONAL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriAduanas::insert($data);
    }
}
