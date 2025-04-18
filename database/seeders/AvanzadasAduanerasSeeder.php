<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriAvanzadasAduaneras;

class AvanzadasAduanerasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '3',
                'nombre' => 'ARICA',
                'descripcion' => 'ARICA',
                'aduana_codigo' => '3',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '4',
                'nombre' => 'VISVIRI',
                'descripcion' => 'VISVIRI',
                'aduana_codigo' => '3',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '5',
                'nombre' => 'CHUNGARA',
                'descripcion' => 'CHUNGARA',
                'aduana_codigo' => '3',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '6',
                'nombre' => 'CHACALLUTA',
                'descripcion' => 'CHACALLUTA',
                'aduana_codigo' => '3',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '7',
                'nombre' => 'IQUIQUE',
                'descripcion' => 'IQUIQUE',
                'aduana_codigo' => '7',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '8',
                'nombre' => 'CANCOSA',
                'descripcion' => 'CANCOSA',
                'aduana_codigo' => '7',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '9',
                'nombre' => 'COLCHANE',
                'descripcion' => 'COLCHANE',
                'aduana_codigo' => '7',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '10',
                'nombre' => 'TOCOPILLA',
                'descripcion' => 'TOCOPILLA',
                'aduana_codigo' => '10',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '12',
                'nombre' => 'TOCORPURI',
                'descripcion' => 'TOCORPURI',
                'aduana_codigo' => '14',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '13',
                'nombre' => 'SAN FRANCISCO',
                'descripcion' => 'SAN FRANCISCO',
                'aduana_codigo' => '17',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '14',
                'nombre' => 'ANTOFAGASTA',
                'descripcion' => 'ANTOFAGASTA',
                'aduana_codigo' => '14',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '15',
                'nombre' => 'OLLAGUE',
                'descripcion' => 'OLLAGUE',
                'aduana_codigo' => '14',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '16',
                'nombre' => 'SOCOMPA',
                'descripcion' => 'SOCOMPA',
                'aduana_codigo' => '14',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '17',
                'nombre' => 'CHAÑARAL',
                'descripcion' => 'CHAÑARAL',
                'aduana_codigo' => '17',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '18',
                'nombre' => 'SAN PEDRO DE ATACAMA',
                'descripcion' => 'SAN PEDRO DE ATACAMA',
                'aduana_codigo' => '14',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '19',
                'nombre' => 'JUNTAS DE COPIAPO',
                'descripcion' => 'JUNTAS DE COPIAPO',
                'aduana_codigo' => '14',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '20',
                'nombre' => 'EL TRANSITO',
                'descripcion' => 'EL TRANSITO',
                'aduana_codigo' => '14',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '21',
                'nombre' => 'SICO',
                'descripcion' => 'SICO',
                'aduana_codigo' => '14',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '22',
                'nombre' => 'BECKER',
                'descripcion' => 'BECKER',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '25',
                'nombre' => 'COQUIMBO',
                'descripcion' => 'COQUIMBO',
                'aduana_codigo' => '25',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '27',
                'nombre' => 'RIVADAVIA',
                'descripcion' => 'RIVADAVIA',
                'aduana_codigo' => '25',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '28',
                'nombre' => 'HURTADO',
                'descripcion' => 'HURTADO',
                'aduana_codigo' => '25',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '29',
                'nombre' => 'LAS TORTOLAS',
                'descripcion' => 'LAS TORTOLAS',
                'aduana_codigo' => '25',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '30',
                'nombre' => 'COGOTI',
                'descripcion' => 'COGOTI',
                'aduana_codigo' => '25',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '31',
                'nombre' => 'SALAMANCA',
                'descripcion' => 'SALAMANCA',
                'aduana_codigo' => '25',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '32',
                'nombre' => 'TULAHUEN',
                'descripcion' => 'TULAHUEN',
                'aduana_codigo' => '25',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '33',
                'nombre' => 'LOS ANDES',
                'descripcion' => 'LOS ANDES',
                'aduana_codigo' => '33',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '34',
                'nombre' => 'VALPARAISO',
                'descripcion' => 'VALPARAISO',
                'aduana_codigo' => '34',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '36',
                'nombre' => 'CHINCOLCO',
                'descripcion' => 'CHINCOLCO',
                'aduana_codigo' => '33',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '38',
                'nombre' => 'LOS LIBERTADORES',
                'descripcion' => 'LOS LIBERTADORES',
                'aduana_codigo' => '33',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '39',
                'nombre' => 'SAN ANTONIO',
                'descripcion' => 'SAN ANTONIO',
                'aduana_codigo' => '39',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '45',
                'nombre' => 'PORTILLO DEL MAIPO',
                'descripcion' => 'PORTILLO DEL MAIPO',
                'aduana_codigo' => '48',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '48',
                'nombre' => 'METROPOLITANA',
                'descripcion' => 'METROPOLITANA',
                'aduana_codigo' => '48',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '50',
                'nombre' => 'LAS LEÑAS',
                'descripcion' => 'LAS LEÑAS',
                'aduana_codigo' => '48',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '51',
                'nombre' => 'LAGO OHIGGINS',
                'descripcion' => 'LAGO OHIGGINS',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '53',
                'nombre' => 'PUENTE NEGRO',
                'descripcion' => 'PUENTE NEGRO',
                'aduana_codigo' => '48',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '55',
                'nombre' => 'TALCAHUANO',
                'descripcion' => 'TALCAHUANO',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '56',
                'nombre' => 'SAN VICENTE',
                'descripcion' => 'SAN VICENTE',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '57',
                'nombre' => 'LOS QUEÑES DEL PLANCHON',
                'descripcion' => 'LOS QUEÑES DEL PLANCHON',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '58',
                'nombre' => 'MAYER',
                'descripcion' => 'MAYER',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '59',
                'nombre' => 'MAULE',
                'descripcion' => 'MAULE',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '60',
                'nombre' => 'EL MELADO',
                'descripcion' => 'EL MELADO',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '61',
                'nombre' => 'LOS CANELOS',
                'descripcion' => 'LOS CANELOS',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '62',
                'nombre' => 'ATACALCO',
                'descripcion' => 'ATACALCO',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '63',
                'nombre' => 'LLAIMA',
                'descripcion' => 'LLAIMA',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '64',
                'nombre' => 'LONQUIMAY',
                'descripcion' => 'LONQUIMAY',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '65',
                'nombre' => 'PUCON',
                'descripcion' => 'PUCON',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '66',
                'nombre' => 'LAS TRANCAS',
                'descripcion' => 'LAS TRANCAS',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '67',
                'nombre' => 'OSORNO',
                'descripcion' => 'OSORNO',
                'aduana_codigo' => '67',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '68',
                'nombre' => 'PUYEHUE',
                'descripcion' => 'PUYEHUE',
                'aduana_codigo' => '67',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '69',
                'nombre' => 'PUERTO MONTT',
                'descripcion' => 'PUERTO MONTT',
                'aduana_codigo' => '69',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '70',
                'nombre' => 'PEULLA',
                'descripcion' => 'PEULLA',
                'aduana_codigo' => '69',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '71',
                'nombre' => 'HUAHUM',
                'descripcion' => 'HUAHUM',
                'aduana_codigo' => '67',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '72',
                'nombre' => 'EL LEON',
                'descripcion' => 'EL LEON',
                'aduana_codigo' => '69',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '73',
                'nombre' => 'ANTUCO',
                'descripcion' => 'ANTUCO',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '74',
                'nombre' => 'SAN FABIAN DE ALICO',
                'descripcion' => 'SAN FABIAN DE ALICO',
                'aduana_codigo' => '55',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '75',
                'nombre' => 'LOS PATOS',
                'descripcion' => 'LOS PATOS',
                'aduana_codigo' => '33',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '76',
                'nombre' => 'CARIRRINE',
                'descripcion' => 'CARIRRINE',
                'aduana_codigo' => '69',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '77',
                'nombre' => 'TRIANA',
                'descripcion' => 'TRIANA',
                'aduana_codigo' => '69',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '78',
                'nombre' => 'IBANEZ PALAVICINI',
                'descripcion' => 'IBANEZ PALAVICINI',
                'aduana_codigo' => '69',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '79',
                'nombre' => 'RIO BELLAVISTA',
                'descripcion' => 'RIO BELLAVISTA',
                'aduana_codigo' => '92',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '80',
                'nombre' => 'RIO MOSCO',
                'descripcion' => 'RIO MOSCO',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '81',
                'nombre' => 'EL BOLSON',
                'descripcion' => 'EL BOLSON',
                'aduana_codigo' => '69',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '82',
                'nombre' => 'FUTALEUFU',
                'descripcion' => 'FUTALEUFU',
                'aduana_codigo' => '69',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '83',
                'nombre' => 'COYHAIQUE (PASO)',
                'descripcion' => 'COYHAIQUE (PASO)',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '84',
                'nombre' => 'ALTO PALENA',
                'descripcion' => 'ALTO PALENA',
                'aduana_codigo' => '69',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '85',
                'nombre' => 'LAGO VERDE',
                'descripcion' => 'LAGO VERDE',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '86',
                'nombre' => 'COYHAIQUE (REGIONAL)',
                'descripcion' => 'COYHAIQUE (REGIONAL)',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '87',
                'nombre' => 'CHILE CHICO',
                'descripcion' => 'CHILE CHICO',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '88',
                'nombre' => 'APPELEG',
                'descripcion' => 'APPELEG',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '89',
                'nombre' => 'HUEMULES',
                'descripcion' => 'HUEMULES',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '90',
                'nombre' => 'PUERTO AYSEN',
                'descripcion' => 'PUERTO AYSEN',
                'aduana_codigo' => '90',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '91',
                'nombre' => 'PORTEZUELO IBAÑEZ-PALAVICINI',
                'descripcion' => 'PORTEZUELO IBAÑEZ-PALAVICINI',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '92',
                'nombre' => 'PUNTA ARENAS',
                'descripcion' => 'PUNTA ARENAS',
                'aduana_codigo' => '92',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '93',
                'nombre' => 'DOROTEA',
                'descripcion' => 'DOROTEA',
                'aduana_codigo' => '92',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '94',
                'nombre' => 'PAMPA ALTA',
                'descripcion' => 'PAMPA ALTA',
                'aduana_codigo' => '83',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '95',
                'nombre' => 'MONTE AYMOND',
                'descripcion' => 'MONTE AYMOND',
                'aduana_codigo' => '92',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '96',
                'nombre' => 'SAN SEBASTIAN',
                'descripcion' => 'SAN SEBASTIAN',
                'aduana_codigo' => '92',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '97',
                'nombre' => 'LAURITA (Casas Viejas)',
                'descripcion' => 'LAURITA (Casas Viejas)',
                'aduana_codigo' => '92',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '98',
                'nombre' => 'RIO DON GUILLERMO',
                'descripcion' => 'RIO DON GUILLERMO',
                'aduana_codigo' => '92',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriAvanzadasAduaneras::create($item);
        }
    }
}
