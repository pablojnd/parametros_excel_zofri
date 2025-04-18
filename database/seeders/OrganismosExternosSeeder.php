<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriOrganismosExternos;

class OrganismosExternosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '1',
                'nombre' => 'SAG',
                'descripcion' => 'SERVICIO AGRÍCOLA GANADERO',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '2',
                'nombre' => 'SNS',
                'descripcion' => 'SERVICIO SALUD',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '3',
                'nombre' => 'SAG y SNS',
                'descripcion' => 'SAG Y SALUD',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '4',
                'nombre' => 'D. GRAL. MOV. NAC.',
                'descripcion' => 'DIRECCIÓN GENERAL DE MOVILIZACIÓN NACIONAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '5',
                'nombre' => 'SERNAPESCA',
                'descripcion' => 'SERVICIO NACIONAL DE PESCA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '6',
                'nombre' => 'OTROS',
                'descripcion' => 'OTROS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '7',
                'nombre' => 'PROC. AFORO 2º',
                'descripcion' => 'PROC. AFORO INCISO 2º',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '8',
                'nombre' => 'PROC. AFORO 3º',
                'descripcion' => 'PROC. AFORO INCISO 3º',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '9',
                'nombre' => 'C. MONUMENTOS',
                'descripcion' => 'COMISIÓN DE MONUMENTOS NACIONALES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '10',
                'nombre' => 'CONAF',
                'descripcion' => 'CORPORACIÓN NACIONAL FORESTAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '11',
                'nombre' => 'COM.ENER.NUCLEAR',
                'descripcion' => 'COMISIÓN NACIONAL DE ENERGÍA NUCLEAR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '12',
                'nombre' => 'DIFROL',
                'descripcion' => 'DIRECCIÓN DE FRONTERAS Y LÍMITES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '13',
                'nombre' => 'ISP',
                'descripcion' => 'INSTITUTO DE SALUD PÚBLICA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '14',
                'nombre' => 'D. BIB, ARCH. Y MUS.',
                'descripcion' => 'DIRECCIÓN DE BIBLIOTECAS, ARCHIVOS Y MUSEOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '16',
                'nombre' => 'ADUANA',
                'descripcion' => 'CALIFICACIÓN DE SERVICIO DE EXPO-ADUANA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '17',
                'nombre' => 'MINIDEFNAC',
                'descripcion' => 'MINISTERIO DE DEFENSA NACIONAL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '18',
                'nombre' => 'ARM.QUIM.BIO',
                'descripcion' => 'DEPTO. DE ARMAS QUÍMICAS Y BIOLÓGICAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '19',
                'nombre' => 'ARM.EXPLOS',
                'descripcion' => 'DEPTO. DE CONTROL DE ARMAS Y EXPLOSIVOS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '20',
                'nombre' => 'CITES',
                'descripcion' => 'CERTIFICACIÓN CITES',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '30',
                'nombre' => 'C ORIGEN',
                'descripcion' => 'CERTIFICADO DE ORIGEN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '31',
                'nombre' => 'FFAA',
                'descripcion' => 'FUERZAS ARMADAS',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriOrganismosExternos::create($item);
        }
    }
}
