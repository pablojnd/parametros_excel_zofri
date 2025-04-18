<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriEstadosDocumentos;

class EstadosDocumentosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'BORRADOR',
                'nombre' => 'BORRADOR',
                'descripcion' => 'BORRADOR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'PENDIENTE',
                'nombre' => 'PENDIENTE DE VISACIÓN',
                'descripcion' => 'PENDIENTE DE VISACIÓN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'RECHAZADO',
                'nombre' => 'RECHAZADO',
                'descripcion' => 'RECHAZADO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'ELIMINADO',
                'nombre' => 'ELIMINADO',
                'descripcion' => 'ELIMINADO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'VISADO',
                'nombre' => 'VISADO',
                'descripcion' => 'VISADO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'CONTROLADO',
                'nombre' => 'CONTROLADO',
                'descripcion' => 'CONTROLADO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'ANULADO',
                'nombre' => 'ANULADO',
                'descripcion' => 'ANULADO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => 'TERMINADO',
                'nombre' => 'TERMINADO',
                'descripcion' => 'TERMINADO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriEstadosDocumentos::create($item);
        }
    }
}
