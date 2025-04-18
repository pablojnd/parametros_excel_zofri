<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriProcedencias;

class ProcedenciasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'EXT',
                'nombre' => 'EXTRANJERO',
                'descripcion' => 'EXTRANJERO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'ZFE',
                'nombre' => 'ZONA FRANCA DE EXTENSION',
                'descripcion' => 'ZONA FRANCA DE EXTENSION',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'RDP',
                'nombre' => 'RESTO DEL PAIS',
                'descripcion' => 'RESTO DEL PAIS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'OZF',
                'nombre' => 'OTRA ZONA FRANCA',
                'descripcion' => 'OTRA ZONA FRANCA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'ZDE',
                'nombre' => 'ZONA DE EXPORTACION',
                'descripcion' => 'ZONA DE EXPORTACION',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'ZFR',
                'nombre' => 'ZONA FRANCA',
                'descripcion' => 'ZONA FRANCA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriProcedencias::create($item);
        }
    }
}
