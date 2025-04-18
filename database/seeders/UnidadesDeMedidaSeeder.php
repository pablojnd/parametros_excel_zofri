<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ZofriUnidadesDeMedida;

class UnidadesDeMedidaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'codigo' => '1',
                'nombre' => 'TONELADA METRICA BRUTA',
                'descripcion' => 'TONELADA METRICA BRUTA',
                'sigla' => 'TMB',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '2',
                'nombre' => 'QUINTAL METRICO BRUTO',
                'descripcion' => 'QUINTAL METRICO BRUTO',
                'sigla' => 'QMB',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '3',
                'nombre' => '1000 KILOWATT HORA',
                'descripcion' => '1000 KILOWATT HORA',
                'sigla' => 'MKWH',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '4',
                'nombre' => 'TONELADA METRICA NETA',
                'descripcion' => 'TONELADA METRICA NETA',
                'sigla' => 'TMN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '5',
                'nombre' => 'KILATE',
                'descripcion' => 'KILATE',
                'sigla' => 'KLT',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '6',
                'nombre' => 'KILOGRAMO NETO',
                'descripcion' => 'KILOGRAMO NETO',
                'sigla' => 'K.N.',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '7',
                'nombre' => 'GRAMO',
                'descripcion' => 'GRAMO',
                'sigla' => 'GN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '8',
                'nombre' => 'HECTOLITRO',
                'descripcion' => 'HECTOLITRO',
                'sigla' => 'HL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '9',
                'nombre' => 'LITRO',
                'descripcion' => 'LITRO',
                'sigla' => 'LT',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '10',
                'nombre' => 'UNIDAD',
                'descripcion' => 'UNIDAD',
                'sigla' => 'U',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '11',
                'nombre' => 'DOCENA',
                'descripcion' => 'DOC',
                'sigla' => 'DOC',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '12',
                'nombre' => 'CENTENA',
                'descripcion' => 'CENT',
                'sigla' => 'U(JGO)',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '13',
                'nombre' => '1000 UNIDADES',
                'descripcion' => '1000 UNIDADES',
                'sigla' => 'MU',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '14',
                'nombre' => 'METRO LINEAL',
                'descripcion' => 'METRO LINEAL',
                'sigla' => 'MT',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '15',
                'nombre' => 'METRO CUADRADO',
                'descripcion' => 'METRO CUADRADO',
                'sigla' => 'MT2',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '16',
                'nombre' => 'METRO CÚBICO',
                'descripcion' => 'METRO CÚBICO',
                'sigla' => 'MCUB',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '17',
                'nombre' => 'PAR',
                'descripcion' => 'PAR',
                'sigla' => '2U',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '18',
                'nombre' => 'KNFC',
                'descripcion' => 'KNFC',
                'sigla' => 'KNFC',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '19',
                'nombre' => 'CARTON',
                'descripcion' => 'CARTON',
                'sigla' => 'CARTON',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '20',
                'nombre' => 'KILOWATTS-HORA',
                'descripcion' => 'KILOWATTS-HORA',
                'sigla' => 'KWH',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '21',
                'nombre' => 'KL',
                'descripcion' => 'KL',
                'sigla' => 'KL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '22',
                'nombre' => 'GALON(3,785 LTS)',
                'descripcion' => 'GALON(3,785 LTS)',
                'sigla' => 'GL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '23',
                'nombre' => 'BAR',
                'descripcion' => 'BAR',
                'sigla' => 'BAR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '24',
                'nombre' => 'M2/1 MM',
                'descripcion' => 'M2/1 MM',
                'sigla' => 'M2/1 MM',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '25',
                'nombre' => 'LIBRA',
                'descripcion' => 'LIBRA',
                'sigla' => 'LIBRA N',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '26',
                'nombre' => 'GRUESA',
                'descripcion' => 'GRUESA',
                'sigla' => 'GSA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '27',
                'nombre' => 'RESMA',
                'descripcion' => 'RESMA',
                'sigla' => 'RMA',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '28',
                'nombre' => 'YARDA',
                'descripcion' => 'YARDA',
                'sigla' => 'YD',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '29',
                'nombre' => 'PIE LINEAL',
                'descripcion' => 'PIE LINEAL',
                'sigla' => 'PIE',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '30',
                'nombre' => 'PIE CUBICO',
                'descripcion' => 'PIE CUBICO',
                'sigla' => 'P3',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '31',
                'nombre' => 'PULGADA LINEAL',
                'descripcion' => 'PULGADA LINEAL',
                'sigla' => 'PUL',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '32',
                'nombre' => 'QUINTAL METRICO NETO',
                'descripcion' => 'QUINTAL METRICO NETO',
                'sigla' => 'QMN',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '33',
                'nombre' => 'SET',
                'descripcion' => 'SET',
                'sigla' => 'SET',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '34',
                'nombre' => 'PIE CUADRADO',
                'descripcion' => 'PIE CUADRADO',
                'sigla' => 'P2',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '35',
                'nombre' => 'BRAZA',
                'descripcion' => 'BRAZA',
                'sigla' => 'BR',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '36',
                'nombre' => 'KILOGRAMO BRUTO',
                'descripcion' => 'KILOGRAMO BRUTO',
                'sigla' => 'KB',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '48',
                'nombre' => '22',
                'descripcion' => '22',
                'sigla' => '22',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
            [
                'codigo' => '99',
                'nombre' => 'SIN UNIDAD DE MEDIDA',
                'descripcion' => 'SIN UNIDAD DE MEDIDA',
                'sigla' => 'SIN UNI',
                'vigencia' => 'S', // S: Vigente, N: No vigente
            ],
        ];

        foreach ($data as $item) {
            ZofriUnidadesDeMedida::create($item);
        }
    }
}
