<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeTrámite;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeTrámiteSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'A', // Código
                'name' => 'ANTICIPADO', // Nombre
                'description' => 'TIPO DE TRAMITE ANTICIPADO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'N', // Código
                'name' => 'NORMAL', // Nombre
                'description' => 'TIPO DE TRAMITE NORMAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'LEY18110', // Código
                'name' => 'LEY 18.110', // Nombre
                'description' => 'TIPO DE TRAMITE LEY 18.110', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => 'ART21', // Código
                'name' => 'ART. 21', // Nombre
                'description' => 'TIPO DE TRAMITE ART. 21', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriTiposDeTrámite::insert($data);
    }
}
