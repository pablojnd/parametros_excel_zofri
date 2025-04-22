<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeAdjunto;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeAdjuntoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => 'ADJ001', // Código
                'name' => 'Facturas', // Nombre
            ],
            [
                'code' => 'ADJ002', // Código
                'name' => 'Certificado de Seguro', // Nombre
            ],
            [
                'code' => 'ADJ003', // Código
                'name' => 'Manifiesto', // Nombre
            ],
            [
                'code' => 'ADJ004', // Código
                'name' => 'Declaración de Trasbordo', // Nombre
            ],
            [
                'code' => 'ADJ005', // Código
                'name' => 'Declaración de Redestinación', // Nombre
            ],
            [
                'code' => 'ADJ006', // Código
                'name' => 'Registro de Reconoc de reembalaje y div', // Nombre
            ],
            [
                'code' => 'ADJ007', // Código
                'name' => 'Nota de Gastos', // Nombre
            ],
            [
                'code' => 'ADJ008', // Código
                'name' => 'Conocimiento de Embarque', // Nombre
            ],
            [
                'code' => 'ADJ009', // Código
                'name' => 'Papeleta de Recepción', // Nombre
            ],
            [
                'code' => 'ADJ010', // Código
                'name' => 'Documento de Zona Franca', // Nombre
            ],
            [
                'code' => 'ADJ011', // Código
                'name' => 'Autorización Ministerial', // Nombre
            ],
        ];

        Parametros\ZofriTiposDeAdjunto::insert($data);
    }
}
