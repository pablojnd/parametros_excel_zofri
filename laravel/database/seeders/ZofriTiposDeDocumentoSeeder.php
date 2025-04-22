<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeDocumento;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeDocumentoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '101', // Código
                'name' => 'DECLARACIÓN DE INGRESO A ZONA FRANCA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '103', // Código
                'name' => 'TRASPASO DE MERCANCIAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '104', // Código
                'name' => 'INFORME DE PRODUCCION O TRANSFORMACION', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '201', // Código
                'name' => 'DECLARACIÓN DE SALIDA DE ZONA FRANCA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '202', // Código
                'name' => 'VENTAS AL DETALLE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '203', // Código
                'name' => 'TRASPASO DE MERCANCIAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '204', // Código
                'name' => 'INFORME DE PRODUCCION O TRANSFORMACION', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '301', // Código
                'name' => 'SOLICITUD DE CAMBIO DE UBICACION', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '302', // Código
                'name' => 'SOLICITUD DE SALIDAD POR CAMBIO DE VOLANTE', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '303', // Código
                'name' => 'SOLICITUD DE SALIDA TEMPORAL', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '401', // Código
                'name' => 'SOLICITUD DE DESTRUCCION DE MERCANCIAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '402', // Código
                'name' => 'INFORME DE MERCANCIAS CONSUMIDAS', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '403', // Código
                'name' => 'RESOLUCIÓN ADUANERA', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '404', // Código
                'name' => 'SOLICITUD DE MODIFICACION DE DOCUMENTO ADUANERO', // Nombre
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '1', // Código
                'name' => 'SOLICITUD DE TRASLADO A ZONA FRANCA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '2', // Código
                'name' => 'DECLARACION DE INGRESO A ZONA FRANCA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '3', // Código
                'name' => 'REEXPEDICION DE INGRESO', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '4', // Código
                'name' => 'DECLARACION DE INGRESO A ZONA FRANCA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '5', // Código
                'name' => 'DECLARACION DE ENTRADA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '6', // Código
                'name' => 'FACTURA DE TRASPASO COMERCIAL EXTRANJERA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '7', // Código
                'name' => 'DECLARACION DE SALIDA A MODULO', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '8', // Código
                'name' => 'SOLICITUD REGISTRO FACTURA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '9', // Código
                'name' => 'DECLARACION DE IMPORTACION', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '10', // Código
                'name' => 'DECLARACION DE IMP. Y PAGO SIMULT.', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '11', // Código
                'name' => 'SOLICITUD DE REEXPEDICION FACTURA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '13', // Código
                'name' => 'SOLICITUD SIMPLE DE IMP. FF.AA.', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '14', // Código
                'name' => 'DECLARACION DE TRASLADO', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '15', // Código
                'name' => 'DECLARACION DE SALIDA LEY 18110', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '16', // Código
                'name' => 'ACTA DE DESTRUCCION', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '17', // Código
                'name' => 'DECLARACION DE TRASLADO', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '18', // Código
                'name' => 'ORDEN DE EMBARQUE O GUIA AEREA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '19', // Código
                'name' => 'INFORME DE PRODUCCION EXTRANJERO', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '20', // Código
                'name' => 'INFORME DE PRODUCCION EXTRANJERO', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '21', // Código
                'name' => 'FACTURA DE IMPORTACION', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '22', // Código
                'name' => 'FACTURA DE EXPORTACION', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '25', // Código
                'name' => 'INFORME DE VENTAS', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '26', // Código
                'name' => 'SOLIC.COMP. DE TRASLADO A ZONA FRANCA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '28', // Código
                'name' => 'AUTODENUNCIO', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '30', // Código
                'name' => 'FACTURA DE TRASPASO COMERCIAL NACIONAL', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '33', // Código
                'name' => 'DECLARACION ALMACEN PARTICULAR T. S.', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '34', // Código
                'name' => 'FACTURA DE TRASPASO INDUSTRIAL EXTRANJERA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '35', // Código
                'name' => 'SOLICITUD DE DESCARGO DE INVENTARIO', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '36', // Código
                'name' => 'SOLICITUD CAMBIO DE DEPOSITO', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '37', // Código
                'name' => 'SOLICITUD DE CAMBIO DE UNIDAD DE MEDIDA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '38', // Código
                'name' => 'INFORME DE PRODUCCION NACIONAL', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '39', // Código
                'name' => 'INFORME DE PRODUCCION NACIONAL', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '40', // Código
                'name' => 'FACTURA DE TRASPASO INDUSTRIAL NACIONAL', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '41', // Código
                'name' => 'SOLICITUD DE DESCARGO DE INVENTARIO ADM.', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '58', // Código
                'name' => 'CERTIFICADO DE TOMA DE MUESTRA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '60', // Código
                'name' => 'INFORME DE DOCUMENTOS EMITIDOS', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '66', // Código
                'name' => 'FACTURA DE TRASPASO COMERCIAL EXTRANJERA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '130', // Código
                'name' => 'FACTURA DE TRASPASO COMERCIAL NACIONAL', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '134', // Código
                'name' => 'FACTURA DE TRASPASO INDUSTRIAL EXTRANJERA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '140', // Código
                'name' => 'FACTURA DE TRASPASO INDUSTRIAL NACIONAL', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '166', // Código
                'name' => 'FACTURA DE TRASPASO COMERCIAL EXTRANJERA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '230', // Código
                'name' => 'FACTURA DE TRASPASO COMERCIAL NACIONAL', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '234', // Código
                'name' => 'FACTURA DE TRASPASO INDUSTRIAL EXTRANJERA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '240', // Código
                'name' => 'FACTURA DE TRASPASO INDUSTRIAL NACIONAL', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '506', // Código
                'name' => 'FACTURA DE TRASPASO COMERCIAL EXTRANJERA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '530', // Código
                'name' => 'FACTURA DE TRASPASO COMERCIAL NACIONAL', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '534', // Código
                'name' => 'FACTURA DE TRASPASO INDUSTRIAL EXTRANJERA', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '540', // Código
                'name' => 'FACTURA DE TRASPASO INDUSTRIAL NACIONAL', // Nombre
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriTiposDeDocumento::insert($data);
    }
}
