<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeAdjunto;

class TiposDeAdjuntoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => 'ADJ001',
                'nombre' => 'Facturas',
            ],
            [
                'codigo' => 'ADJ002',
                'nombre' => 'Certificado de Seguro',
            ],
            [
                'codigo' => 'ADJ003',
                'nombre' => 'Manifiesto',
            ],
            [
                'codigo' => 'ADJ004',
                'nombre' => 'Declaración de Trasbordo',
            ],
            [
                'codigo' => 'ADJ005',
                'nombre' => 'Declaración de Redestinación',
            ],
            [
                'codigo' => 'ADJ006',
                'nombre' => 'Registro de Reconoc de reembalaje y div',
            ],
            [
                'codigo' => 'ADJ007',
                'nombre' => 'Nota de Gastos',
            ],
            [
                'codigo' => 'ADJ008',
                'nombre' => 'Conocimiento de Embarque',
            ],
            [
                'codigo' => 'ADJ009',
                'nombre' => 'Papeleta de Recepción',
            ],
            [
                'codigo' => 'ADJ010',
                'nombre' => 'Documento de Zona Franca',
            ],
            [
                'codigo' => 'ADJ011',
                'nombre' => 'Autorización Ministerial',
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeAdjunto::create($item);
        }
    }
}
