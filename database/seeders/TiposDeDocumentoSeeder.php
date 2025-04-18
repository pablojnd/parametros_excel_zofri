<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeDocumento;

class TiposDeDocumentoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '101',
                'nombre' => 'DECLARACIÓN DE INGRESO A ZONA FRANCA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '103',
                'nombre' => 'TRASPASO DE MERCANCIAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '104',
                'nombre' => 'INFORME DE PRODUCCION O TRANSFORMACION',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '201',
                'nombre' => 'DECLARACIÓN DE SALIDA DE ZONA FRANCA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '202',
                'nombre' => 'VENTAS AL DETALLE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '203',
                'nombre' => 'TRASPASO DE MERCANCIAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '204',
                'nombre' => 'INFORME DE PRODUCCION O TRANSFORMACION',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '301',
                'nombre' => 'SOLICITUD DE CAMBIO DE UBICACION',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '302',
                'nombre' => 'SOLICITUD DE SALIDAD POR CAMBIO DE VOLANTE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '303',
                'nombre' => 'SOLICITUD DE SALIDA TEMPORAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '401',
                'nombre' => 'SOLICITUD DE DESTRUCCION DE MERCANCIAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '402',
                'nombre' => 'INFORME DE MERCANCIAS CONSUMIDAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '403',
                'nombre' => 'RESOLUCIÓN ADUANERA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '404',
                'nombre' => 'SOLICITUD DE MODIFICACION DE DOCUMENTO ADUANERO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '1',
                'nombre' => 'SOLICITUD DE TRASLADO A ZONA FRANCA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '2',
                'nombre' => 'DECLARACION DE INGRESO A ZONA FRANCA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '3',
                'nombre' => 'REEXPEDICION DE INGRESO',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '4',
                'nombre' => 'DECLARACION DE INGRESO A ZONA FRANCA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '5',
                'nombre' => 'DECLARACION DE ENTRADA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '6',
                'nombre' => 'FACTURA DE TRASPASO COMERCIAL EXTRANJERA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '7',
                'nombre' => 'DECLARACION DE SALIDA A MODULO',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '8',
                'nombre' => 'SOLICITUD REGISTRO FACTURA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '9',
                'nombre' => 'DECLARACION DE IMPORTACION',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '10',
                'nombre' => 'DECLARACION DE IMP. Y PAGO SIMULT.',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '11',
                'nombre' => 'SOLICITUD DE REEXPEDICION FACTURA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '13',
                'nombre' => 'SOLICITUD SIMPLE DE IMP. FF.AA.',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '14',
                'nombre' => 'DECLARACION DE TRASLADO',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '15',
                'nombre' => 'DECLARACION DE SALIDA LEY 18110',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '16',
                'nombre' => 'ACTA DE DESTRUCCION',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '17',
                'nombre' => 'DECLARACION DE TRASLADO',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '18',
                'nombre' => 'ORDEN DE EMBARQUE O GUIA AEREA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '19',
                'nombre' => 'INFORME DE PRODUCCION EXTRANJERO',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '20',
                'nombre' => 'INFORME DE PRODUCCION EXTRANJERO',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '21',
                'nombre' => 'FACTURA DE IMPORTACION',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '22',
                'nombre' => 'FACTURA DE EXPORTACION',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '25',
                'nombre' => 'INFORME DE VENTAS',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '26',
                'nombre' => 'SOLIC.COMP. DE TRASLADO A ZONA FRANCA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '28',
                'nombre' => 'AUTODENUNCIO',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '30',
                'nombre' => 'FACTURA DE TRASPASO COMERCIAL NACIONAL',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '33',
                'nombre' => 'DECLARACION ALMACEN PARTICULAR T. S.',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '34',
                'nombre' => 'FACTURA DE TRASPASO INDUSTRIAL EXTRANJERA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '35',
                'nombre' => 'SOLICITUD DE DESCARGO DE INVENTARIO',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '36',
                'nombre' => 'SOLICITUD CAMBIO DE DEPOSITO',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '37',
                'nombre' => 'SOLICITUD DE CAMBIO DE UNIDAD DE MEDIDA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '38',
                'nombre' => 'INFORME DE PRODUCCION NACIONAL',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '39',
                'nombre' => 'INFORME DE PRODUCCION NACIONAL',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '40',
                'nombre' => 'FACTURA DE TRASPASO INDUSTRIAL NACIONAL',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '41',
                'nombre' => 'SOLICITUD DE DESCARGO DE INVENTARIO ADM.',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '58',
                'nombre' => 'CERTIFICADO DE TOMA DE MUESTRA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '60',
                'nombre' => 'INFORME DE DOCUMENTOS EMITIDOS',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '66',
                'nombre' => 'FACTURA DE TRASPASO COMERCIAL EXTRANJERA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '130',
                'nombre' => 'FACTURA DE TRASPASO COMERCIAL NACIONAL',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '134',
                'nombre' => 'FACTURA DE TRASPASO INDUSTRIAL EXTRANJERA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '140',
                'nombre' => 'FACTURA DE TRASPASO INDUSTRIAL NACIONAL',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '166',
                'nombre' => 'FACTURA DE TRASPASO COMERCIAL EXTRANJERA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '230',
                'nombre' => 'FACTURA DE TRASPASO COMERCIAL NACIONAL',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '234',
                'nombre' => 'FACTURA DE TRASPASO INDUSTRIAL EXTRANJERA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '240',
                'nombre' => 'FACTURA DE TRASPASO INDUSTRIAL NACIONAL',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '506',
                'nombre' => 'FACTURA DE TRASPASO COMERCIAL EXTRANJERA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '530',
                'nombre' => 'FACTURA DE TRASPASO COMERCIAL NACIONAL',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '534',
                'nombre' => 'FACTURA DE TRASPASO INDUSTRIAL EXTRANJERA',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '540',
                'nombre' => 'FACTURA DE TRASPASO INDUSTRIAL NACIONAL',
                'vigencia' => 'N', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeDocumento::create($item);
        }
    }
}
