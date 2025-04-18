<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeTrámite;

class TiposDeTrámiteSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'A',
                'nombre' => 'ANTICIPADO',
                'descripcion' => 'TIPO DE TRAMITE ANTICIPADO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'N',
                'nombre' => 'NORMAL',
                'descripcion' => 'TIPO DE TRAMITE NORMAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'LEY18110',
                'nombre' => 'LEY 18.110',
                'descripcion' => 'TIPO DE TRAMITE LEY 18.110',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'ART21',
                'nombre' => 'ART. 21',
                'descripcion' => 'TIPO DE TRAMITE ART. 21',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeTrámite::create($item);
        }
    }
}
