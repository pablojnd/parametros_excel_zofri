<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriTiposDeBulto;

class TiposDeBultoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '1',
                'nombre' => 'POLVO',
                'descripcion' => 'GRANEL SÓLIDO, PARTICULAS FINAS (POLVO)',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '2',
                'nombre' => 'GRANOS',
                'descripcion' => 'GRANEL SÓLIDO, PARTICULAS GRANULARES (GRANOS)',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '3',
                'nombre' => 'NÓDULOS',
                'descripcion' => 'GRANEL SÓLIDO, PARTICULAS GRANDES (NÓDULOS)',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '4',
                'nombre' => 'LÍQUIDO',
                'descripcion' => 'GRANEL LÍQUIDO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '5',
                'nombre' => 'GAS',
                'descripcion' => 'GRANEL GASEOSO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '10',
                'nombre' => 'PIEZA',
                'descripcion' => 'PIEZAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '11',
                'nombre' => 'TUBO',
                'descripcion' => 'TUBOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '12',
                'nombre' => 'CILINDRO',
                'descripcion' => 'CILINDRO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '13',
                'nombre' => 'ROLLO',
                'descripcion' => 'ROLLOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '16',
                'nombre' => 'BARRA',
                'descripcion' => 'BARRAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '17',
                'nombre' => 'LINGOTE',
                'descripcion' => 'LINGOTES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '18',
                'nombre' => 'TRONCO',
                'descripcion' => 'TRONCOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '19',
                'nombre' => 'BLOQUE',
                'descripcion' => 'BLOQUE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '20',
                'nombre' => 'ROLLIZO',
                'descripcion' => 'ROLLIZO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '21',
                'nombre' => 'CAJON',
                'descripcion' => 'CAJON',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '22',
                'nombre' => 'CAJA DE CARTÓN',
                'descripcion' => 'CAJAS DE CARTÓN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '23',
                'nombre' => 'FARDO',
                'descripcion' => 'FARDO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '24',
                'nombre' => 'BAÚL',
                'descripcion' => 'BAÚL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '25',
                'nombre' => 'COFRE',
                'descripcion' => 'COFRE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '26',
                'nombre' => 'ARMAZÓN',
                'descripcion' => 'ARMAZÓN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '27',
                'nombre' => 'BANDEJA',
                'descripcion' => 'BANDEJA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '28',
                'nombre' => 'CAJAMADERA',
                'descripcion' => 'CAJAS DE MADERA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '29',
                'nombre' => 'CAJALATA',
                'descripcion' => 'CAJAS DE LATA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '30',
                'nombre' => 'CAJANOMAD',
                'descripcion' => 'CAJA NO DE MADERA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '31',
                'nombre' => 'BOTELLAGAS',
                'descripcion' => 'BOTELLA DE GAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '32',
                'nombre' => 'BOTELLA',
                'descripcion' => 'BOTELLA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '33',
                'nombre' => 'JAULA',
                'descripcion' => 'JAULAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '34',
                'nombre' => 'BIDON',
                'descripcion' => 'BIDON',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '35',
                'nombre' => 'JABA',
                'descripcion' => 'JABAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '36',
                'nombre' => 'CESTA',
                'descripcion' => 'CESTAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '37',
                'nombre' => 'BARRILETE',
                'descripcion' => 'BARRILETE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '38',
                'nombre' => 'TONEL',
                'descripcion' => 'TONEL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '39',
                'nombre' => 'PIPA',
                'descripcion' => 'PIPAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '40',
                'nombre' => 'CAJANOESP',
                'descripcion' => 'CAJANOESP',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '41',
                'nombre' => 'JARRO',
                'descripcion' => 'JARRO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '42',
                'nombre' => 'FRASCO',
                'descripcion' => 'FRASCO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '43',
                'nombre' => 'DAMAJUANA',
                'descripcion' => 'DAMAJUANA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '44',
                'nombre' => 'BARRIL',
                'descripcion' => 'BARRIL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '45',
                'nombre' => 'TAMBOR',
                'descripcion' => 'TAMBOR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '46',
                'nombre' => 'CUÑETE',
                'descripcion' => 'CUÑETES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '47',
                'nombre' => 'TARRO',
                'descripcion' => 'TARROS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '51',
                'nombre' => 'CUBO',
                'descripcion' => 'CUBO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '61',
                'nombre' => 'PAQUETE',
                'descripcion' => 'PAQUETE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '62',
                'nombre' => 'SACO',
                'descripcion' => 'SACOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '63',
                'nombre' => 'MALETA',
                'descripcion' => 'MALETA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '64',
                'nombre' => 'BOLSA',
                'descripcion' => 'BOLSA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '65',
                'nombre' => 'BALA',
                'descripcion' => 'BALA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '66',
                'nombre' => 'RED',
                'descripcion' => 'RED',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '67',
                'nombre' => 'SOBRE',
                'descripcion' => 'SOBRES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '73',
                'nombre' => 'CONT20',
                'descripcion' => 'CONTENEDOR DE 20 PIES DRY',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '74',
                'nombre' => 'CONT40',
                'descripcion' => 'CONTENEDOR DE 40 PIES DRY',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '75',
                'nombre' => 'REEFER20',
                'descripcion' => 'CONTENEDOR REFRIGERADO 20 PIES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '76',
                'nombre' => 'REEFER40',
                'descripcion' => 'CONTENEDOR REFRIGERADO 40 PIES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '77',
                'nombre' => 'ESTANQUE',
                'descripcion' => 'ESTANQUE  (no utilizar para contenedor Tank)',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '78',
                'nombre' => 'CONTNOESP',
                'descripcion' => 'CONTENEDOR NO ESPECIFICADO (Open Top, Tank, Flat Rack, otros)',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '80',
                'nombre' => 'PALLET',
                'descripcion' => 'PALLETS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '81',
                'nombre' => 'TABLERO',
                'descripcion' => 'TABLERO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '82',
                'nombre' => 'LAMINA',
                'descripcion' => 'LAMINAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '83',
                'nombre' => 'CARRETE',
                'descripcion' => 'CARRETE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '85',
                'nombre' => 'AUTOMOTOR',
                'descripcion' => 'AUTOMOTOR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '86',
                'nombre' => 'ATAUD',
                'descripcion' => 'ATAUD',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '88',
                'nombre' => 'MAQUINARIA',
                'descripcion' => 'MAQUINARIA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '89',
                'nombre' => 'PLANCHA',
                'descripcion' => 'PLANCHAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '90',
                'nombre' => 'ATADO',
                'descripcion' => 'ATADOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '91',
                'nombre' => 'BOBINA',
                'descripcion' => 'BOBINA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '92',
                'nombre' => 'OTRAS',
                'descripcion' => 'OTRAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '93',
                'nombre' => 'BULTONOESP',
                'descripcion' => 'OTROS BULTOS NO ESPECIFICADOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '95',
                'nombre' => 'IND. TIPO',
                'descripcion' => 'IND. TIPO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '98',
                'nombre' => 'SIN BULTO',
                'descripcion' => 'NO EXISTE BULTO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '99',
                'nombre' => 'S/EMBALAR',
                'descripcion' => 'SIN EMBALAR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriTiposDeBulto::create($item);
        }
    }
}
