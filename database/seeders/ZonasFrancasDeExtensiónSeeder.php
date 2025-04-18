<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriZonasFrancasDeExtensión;

class ZonasFrancasDeExtensiónSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '80',
                'nombre' => 'ARICA  ',
                'descripcion' => 'ARICA  ',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '81',
                'nombre' => 'IQUIQUE  ',
                'descripcion' => 'IQUIQUE  ',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriZonasFrancasDeExtensión::create($item);
        }
    }
}
