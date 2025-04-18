<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriMonedas;

class MonedasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '1',
                'nombre' => 'PESO',
                'descripcion' => 'PESO ARGENTINO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '4',
                'nombre' => 'BOLIVIANO',
                'descripcion' => 'BOLIVIANO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '5',
                'nombre' => 'CRUZEIRO REAL',
                'descripcion' => 'CRUZEIRO REAL',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '6',
                'nombre' => 'DÓLAR CAN',
                'descripcion' => 'DÓLAR',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '13',
                'nombre' => 'DÓLAR USA',
                'descripcion' => 'DÓLAR',
                'simbolo' => 'USD$',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '23',
                'nombre' => 'GUARANI',
                'descripcion' => 'GUARANI',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '24',
                'nombre' => 'NUEVO SOL',
                'descripcion' => 'NUEVO SOL',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '26',
                'nombre' => 'PESO URUG',
                'descripcion' => 'PESO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '30',
                'nombre' => 'MARCO AL',
                'descripcion' => 'DEUTSHE MARK O MARCO ALEMAN',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '36',
                'nombre' => 'DOLAR AUST',
                'descripcion' => 'DOLAR',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '37',
                'nombre' => 'CHELIN',
                'descripcion' => 'SCHILLING O CHELIN',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '40',
                'nombre' => 'FRANCO BEL',
                'descripcion' => 'FRANCO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '48',
                'nombre' => 'RENMINBI',
                'descripcion' => 'RENMINBI',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '51',
                'nombre' => 'CORONA DIN',
                'descripcion' => 'CORONA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '53',
                'nombre' => 'PESETA',
                'descripcion' => 'PESETA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '57',
                'nombre' => 'MARCO FIN',
                'descripcion' => 'MARKKA O MARCO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '58',
                'nombre' => 'FRANCO FR',
                'descripcion' => 'FRANCO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '64',
                'nombre' => 'FLORIN',
                'descripcion' => 'FLORIN',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '71',
                'nombre' => 'LIRA',
                'descripcion' => 'LIRA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '72',
                'nombre' => 'YEN',
                'descripcion' => 'YEN',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '82',
                'nombre' => 'FRANCO SZ',
                'descripcion' => 'FRANCO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '96',
                'nombre' => 'CORONA NOR',
                'descripcion' => 'CORONA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '97',
                'nombre' => 'DÓLAR NZ',
                'descripcion' => 'DÓLAR',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '102',
                'nombre' => 'LIBRA EST',
                'descripcion' => 'LIBRA ESTERLINA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '113',
                'nombre' => 'CORONA SC',
                'descripcion' => 'CORONA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '127',
                'nombre' => 'DÓLAR HK',
                'descripcion' => 'DÓLAR',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '128',
                'nombre' => 'RAND',
                'descripcion' => 'RAND',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '129',
                'nombre' => 'PESO COL',
                'descripcion' => 'PESO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '130',
                'nombre' => 'SUCRE',
                'descripcion' => 'SUCRE',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '131',
                'nombre' => 'DRACMA',
                'descripcion' => 'DRACMA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '132',
                'nombre' => 'PESO MEX',
                'descripcion' => 'NUEVO PESO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '133',
                'nombre' => 'ESCUDO',
                'descripcion' => 'ESCUDO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '134',
                'nombre' => 'BOLIVAR',
                'descripcion' => 'BOLIVAR',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '135',
                'nombre' => 'DINAR',
                'descripcion' => 'DINAR',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '136',
                'nombre' => 'DÓLAR SIN',
                'descripcion' => 'DÓLAR',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '137',
                'nombre' => 'RUPIA',
                'descripcion' => 'RUPIA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '138',
                'nombre' => 'DÓLAR TAI',
                'descripcion' => 'DÓLAR',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '139',
                'nombre' => 'DIRHAM',
                'descripcion' => 'DIRHAM',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '142',
                'nombre' => 'EURO',
                'descripcion' => 'EURO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '200',
                'nombre' => 'PESO CL',
                'descripcion' => 'PESO CHILENO',
                'simbolo' => '$',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '301',
                'nombre' => 'WON',
                'descripcion' => 'WON       (CHINA)+',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '302',
                'nombre' => 'SCHILLING AUSTRIACO',
                'descripcion' => 'SCHILLING AUSTRIACO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '303',
                'nombre' => 'MARKKA',
                'descripcion' => 'MARKKA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '304',
                'nombre' => 'BALBOA',
                'descripcion' => 'BALBOA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '305',
                'nombre' => 'PESO FILIPINO',
                'descripcion' => 'PESO FILIPINO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '306',
                'nombre' => 'COLON',
                'descripcion' => 'COLON',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '307',
                'nombre' => 'QUETZAL',
                'descripcion' => 'QUETZAL',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '308',
                'nombre' => 'LEV',
                'descripcion' => 'LEV',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '309',
                'nombre' => 'BAHT',
                'descripcion' => 'BAHT                  (THAILANDIA)',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '310',
                'nombre' => 'LEU',
                'descripcion' => 'LEU',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '311',
                'nombre' => 'LIRA TURCA',
                'descripcion' => 'LIRA TURCA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '312',
                'nombre' => 'PESO CUBANO',
                'descripcion' => 'PESO CUBANO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '313',
                'nombre' => 'RUPIA CINGALESA',
                'descripcion' => 'RUPIA CINGALESA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '314',
                'nombre' => 'RINGGIT',
                'descripcion' => 'RINGGIT',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '315',
                'nombre' => 'PESO LAS BAHAMAS',
                'descripcion' => 'PESO LAS BAHAMAS',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '316',
                'nombre' => 'ZLOTY',
                'descripcion' => 'ZLOTY               (POLONIA)',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '317',
                'nombre' => 'LIBRA  (EGIPTO)',
                'descripcion' => 'LIBRA  (EGIPTO)',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '318',
                'nombre' => 'FORINT',
                'descripcion' => 'FORINT',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '319',
                'nombre' => 'PUNT',
                'descripcion' => 'PUNT',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '320',
                'nombre' => 'RUPIA',
                'descripcion' => 'RUPIA        (PAKISTAN)',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '321',
                'nombre' => 'ZIMBAWE',
                'descripcion' => 'ZIMBAWE',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '322',
                'nombre' => 'RIAL',
                'descripcion' => 'RIAL',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '323',
                'nombre' => 'FRANCO',
                'descripcion' => 'FRANCO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '324',
                'nombre' => 'RYAL',
                'descripcion' => 'RYAL',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '325',
                'nombre' => 'LIBRA IRLANDA',
                'descripcion' => 'LIBRA IRLANDA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '326',
                'nombre' => 'CORONA ISLANDIA',
                'descripcion' => 'CORONA ISLANDIA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '327',
                'nombre' => 'CORONA CHECA',
                'descripcion' => 'CORONA CHECA',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '328',
                'nombre' => 'RUBLO',
                'descripcion' => 'RUBLO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '329',
                'nombre' => 'DINAR YUGOESLAVO',
                'descripcion' => 'DINAR YUGOESLAVO',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '900',
                'nombre' => 'OTRAS NO ESPECIFICADAS',
                'descripcion' => 'OTRAS NO ESPECIFICADAS',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '901',
                'nombre' => 'ECU',
                'descripcion' => 'ECU',
                'simbolo' => '',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriMonedas::create($item);
        }
    }
}
