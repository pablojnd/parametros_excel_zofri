<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriTiposDeBulto;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriTiposDeBultoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '1', // Código
                'name' => 'POLVO', // Nombre
                'description' => 'GRANEL SÓLIDO, PARTICULAS FINAS (POLVO)', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '2', // Código
                'name' => 'GRANOS', // Nombre
                'description' => 'GRANEL SÓLIDO, PARTICULAS GRANULARES (GRANOS)', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '3', // Código
                'name' => 'NÓDULOS', // Nombre
                'description' => 'GRANEL SÓLIDO, PARTICULAS GRANDES (NÓDULOS)', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '4', // Código
                'name' => 'LÍQUIDO', // Nombre
                'description' => 'GRANEL LÍQUIDO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '5', // Código
                'name' => 'GAS', // Nombre
                'description' => 'GRANEL GASEOSO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '10', // Código
                'name' => 'PIEZA', // Nombre
                'description' => 'PIEZAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '11', // Código
                'name' => 'TUBO', // Nombre
                'description' => 'TUBOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '12', // Código
                'name' => 'CILINDRO', // Nombre
                'description' => 'CILINDRO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '13', // Código
                'name' => 'ROLLO', // Nombre
                'description' => 'ROLLOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '16', // Código
                'name' => 'BARRA', // Nombre
                'description' => 'BARRAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '17', // Código
                'name' => 'LINGOTE', // Nombre
                'description' => 'LINGOTES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '18', // Código
                'name' => 'TRONCO', // Nombre
                'description' => 'TRONCOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '19', // Código
                'name' => 'BLOQUE', // Nombre
                'description' => 'BLOQUE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '20', // Código
                'name' => 'ROLLIZO', // Nombre
                'description' => 'ROLLIZO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '21', // Código
                'name' => 'CAJON', // Nombre
                'description' => 'CAJON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '22', // Código
                'name' => 'CAJA DE CARTÓN', // Nombre
                'description' => 'CAJAS DE CARTÓN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '23', // Código
                'name' => 'FARDO', // Nombre
                'description' => 'FARDO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '24', // Código
                'name' => 'BAÚL', // Nombre
                'description' => 'BAÚL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '25', // Código
                'name' => 'COFRE', // Nombre
                'description' => 'COFRE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '26', // Código
                'name' => 'ARMAZÓN', // Nombre
                'description' => 'ARMAZÓN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '27', // Código
                'name' => 'BANDEJA', // Nombre
                'description' => 'BANDEJA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '28', // Código
                'name' => 'CAJAMADERA', // Nombre
                'description' => 'CAJAS DE MADERA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '29', // Código
                'name' => 'CAJALATA', // Nombre
                'description' => 'CAJAS DE LATA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '30', // Código
                'name' => 'CAJANOMAD', // Nombre
                'description' => 'CAJA NO DE MADERA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '31', // Código
                'name' => 'BOTELLAGAS', // Nombre
                'description' => 'BOTELLA DE GAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '32', // Código
                'name' => 'BOTELLA', // Nombre
                'description' => 'BOTELLA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '33', // Código
                'name' => 'JAULA', // Nombre
                'description' => 'JAULAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '34', // Código
                'name' => 'BIDON', // Nombre
                'description' => 'BIDON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '35', // Código
                'name' => 'JABA', // Nombre
                'description' => 'JABAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '36', // Código
                'name' => 'CESTA', // Nombre
                'description' => 'CESTAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '37', // Código
                'name' => 'BARRILETE', // Nombre
                'description' => 'BARRILETE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '38', // Código
                'name' => 'TONEL', // Nombre
                'description' => 'TONEL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '39', // Código
                'name' => 'PIPA', // Nombre
                'description' => 'PIPAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '40', // Código
                'name' => 'CAJANOESP', // Nombre
                'description' => 'CAJANOESP', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '41', // Código
                'name' => 'JARRO', // Nombre
                'description' => 'JARRO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '42', // Código
                'name' => 'FRASCO', // Nombre
                'description' => 'FRASCO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '43', // Código
                'name' => 'DAMAJUANA', // Nombre
                'description' => 'DAMAJUANA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '44', // Código
                'name' => 'BARRIL', // Nombre
                'description' => 'BARRIL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '45', // Código
                'name' => 'TAMBOR', // Nombre
                'description' => 'TAMBOR', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '46', // Código
                'name' => 'CUÑETE', // Nombre
                'description' => 'CUÑETES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '47', // Código
                'name' => 'TARRO', // Nombre
                'description' => 'TARROS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '51', // Código
                'name' => 'CUBO', // Nombre
                'description' => 'CUBO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '61', // Código
                'name' => 'PAQUETE', // Nombre
                'description' => 'PAQUETE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '62', // Código
                'name' => 'SACO', // Nombre
                'description' => 'SACOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '63', // Código
                'name' => 'MALETA', // Nombre
                'description' => 'MALETA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '64', // Código
                'name' => 'BOLSA', // Nombre
                'description' => 'BOLSA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '65', // Código
                'name' => 'BALA', // Nombre
                'description' => 'BALA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '66', // Código
                'name' => 'RED', // Nombre
                'description' => 'RED', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '67', // Código
                'name' => 'SOBRE', // Nombre
                'description' => 'SOBRES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '73', // Código
                'name' => 'CONT20', // Nombre
                'description' => 'CONTENEDOR DE 20 PIES DRY', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '74', // Código
                'name' => 'CONT40', // Nombre
                'description' => 'CONTENEDOR DE 40 PIES DRY', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '75', // Código
                'name' => 'REEFER20', // Nombre
                'description' => 'CONTENEDOR REFRIGERADO 20 PIES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '76', // Código
                'name' => 'REEFER40', // Nombre
                'description' => 'CONTENEDOR REFRIGERADO 40 PIES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '77', // Código
                'name' => 'ESTANQUE', // Nombre
                'description' => 'ESTANQUE  (no utilizar para contenedor Tank)', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '78', // Código
                'name' => 'CONTNOESP', // Nombre
                'description' => 'CONTENEDOR NO ESPECIFICADO (Open Top, Tank, Flat Rack, otros)', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '80', // Código
                'name' => 'PALLET', // Nombre
                'description' => 'PALLETS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '81', // Código
                'name' => 'TABLERO', // Nombre
                'description' => 'TABLERO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '82', // Código
                'name' => 'LAMINA', // Nombre
                'description' => 'LAMINAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '83', // Código
                'name' => 'CARRETE', // Nombre
                'description' => 'CARRETE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '85', // Código
                'name' => 'AUTOMOTOR', // Nombre
                'description' => 'AUTOMOTOR', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '86', // Código
                'name' => 'ATAUD', // Nombre
                'description' => 'ATAUD', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '88', // Código
                'name' => 'MAQUINARIA', // Nombre
                'description' => 'MAQUINARIA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '89', // Código
                'name' => 'PLANCHA', // Nombre
                'description' => 'PLANCHAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '90', // Código
                'name' => 'ATADO', // Nombre
                'description' => 'ATADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '91', // Código
                'name' => 'BOBINA', // Nombre
                'description' => 'BOBINA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '92', // Código
                'name' => 'OTRAS', // Nombre
                'description' => 'OTRAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '93', // Código
                'name' => 'BULTONOESP', // Nombre
                'description' => 'OTROS BULTOS NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '95', // Código
                'name' => 'IND. TIPO', // Nombre
                'description' => 'IND. TIPO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '98', // Código
                'name' => 'SIN BULTO', // Nombre
                'description' => 'NO EXISTE BULTO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '99', // Código
                'name' => 'S/EMBALAR', // Nombre
                'description' => 'SIN EMBALAR', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriTiposDeBulto::insert($data);
    }
}
