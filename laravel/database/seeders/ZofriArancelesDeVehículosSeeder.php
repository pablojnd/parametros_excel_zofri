<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriArancelesDeVehículos;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriArancelesDeVehículosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '87031000', // Código
            ],
            [
                'code' => '87032110', // Código
            ],
            [
                'code' => '87032120', // Código
            ],
            [
                'code' => '87032130', // Código
            ],
            [
                'code' => '87032191', // Código
            ],
            [
                'code' => '87032220', // Código
            ],
            [
                'code' => '87032230', // Código
            ],
            [
                'code' => '87032291', // Código
            ],
            [
                'code' => '87032320', // Código
            ],
            [
                'code' => '87032330', // Código
            ],
            [
                'code' => '87032391', // Código
            ],
            [
                'code' => '87032420', // Código
            ],
            [
                'code' => '87032430', // Código
            ],
            [
                'code' => '87032491', // Código
            ],
            [
                'code' => '87033110', // Código
            ],
            [
                'code' => '87033120', // Código
            ],
            [
                'code' => '87033130', // Código
            ],
            [
                'code' => '87033220', // Código
            ],
            [
                'code' => '87033230', // Código
            ],
            [
                'code' => '87033291', // Código
            ],
            [
                'code' => '87033310', // Código
            ],
            [
                'code' => '87033320', // Código
            ],
            [
                'code' => '87033330', // Código
            ],
            [
                'code' => '87039010', // Código
            ],
            [
                'code' => '87039020', // Código
            ],
            [
                'code' => '87039030', // Código
            ],
            [
                'code' => '87042121', // Código
            ],
            [
                'code' => '87042140', // Código
            ],
            [
                'code' => '87042150', // Código
            ],
            [
                'code' => '87042240', // Código
            ],
            [
                'code' => '87042250', // Código
            ],
            [
                'code' => '87042260', // Código
            ],
            [
                'code' => '87042321', // Código
            ],
            [
                'code' => '87042330', // Código
            ],
            [
                'code' => '87043121', // Código
            ],
            [
                'code' => '87043140', // Código
            ],
            [
                'code' => '87043150', // Código
            ],
            [
                'code' => '87043170', // Código
            ],
            [
                'code' => '87043210', // Código
            ],
            [
                'code' => '87043240', // Código
            ],
            [
                'code' => '87043250', // Código
            ],
            [
                'code' => '87043260', // Código
            ],
            [
                'code' => '87043270', // Código
            ],
            [
                'code' => '87043280', // Código
            ],
            [
                'code' => '87049020', // Código
            ],
            [
                'code' => '87049030', // Código
            ],
            [
                'code' => '87049040', // Código
            ],
            [
                'code' => '87049050', // Código
            ],
            [
                'code' => '87049060', // Código
            ],
            [
                'code' => '87049070', // Código
            ],
            [
                'code' => '00120101', // Código
            ],
            [
                'code' => '00330100', // Código
            ],
            [
                'code' => '00330200', // Código
            ],
            [
                'code' => '00330300', // Código
            ],
            [
                'code' => '00330400', // Código
            ],
            [
                'code' => '87021011', // Código
            ],
            [
                'code' => '87021019', // Código
            ],
            [
                'code' => '87021091', // Código
            ],
            [
                'code' => '87021099', // Código
            ],
            [
                'code' => '87029011', // Código
            ],
            [
                'code' => '87029019', // Código
            ],
            [
                'code' => '87029020', // Código
            ],
            [
                'code' => '87029090', // Código
            ],
            [
                'code' => '87032199', // Código
            ],
            [
                'code' => '87032211', // Código
            ],
            [
                'code' => '87032219', // Código
            ],
            [
                'code' => '87032299', // Código
            ],
            [
                'code' => '87032311', // Código
            ],
            [
                'code' => '87032319', // Código
            ],
            [
                'code' => '87032399', // Código
            ],
            [
                'code' => '87032411', // Código
            ],
            [
                'code' => '87032419', // Código
            ],
            [
                'code' => '87032499', // Código
            ],
            [
                'code' => '87033190', // Código
            ],
            [
                'code' => '87033211', // Código
            ],
            [
                'code' => '87033212', // Código
            ],
            [
                'code' => '87033299', // Código
            ],
            [
                'code' => '87033390', // Código
            ],
            [
                'code' => '87039090', // Código
            ],
            [
                'code' => '87042111', // Código
            ],
            [
                'code' => '87042112', // Código
            ],
            [
                'code' => '87042119', // Código
            ],
            [
                'code' => '87042129', // Código
            ],
            [
                'code' => '87042130', // Código
            ],
            [
                'code' => '87043111', // Código
            ],
            [
                'code' => '87043119', // Código
            ],
            [
                'code' => '87043129', // Código
            ],
            [
                'code' => '87043130', // Código
            ],
            [
                'code' => '87049010', // Código
            ],
            [
                'code' => '87051010', // Código
            ],
            [
                'code' => '87051090', // Código
            ],
            [
                'code' => '87052010', // Código
            ],
            [
                'code' => '87052090', // Código
            ],
            [
                'code' => '87054010', // Código
            ],
            [
                'code' => '87054090', // Código
            ],
            [
                'code' => '87059010', // Código
            ],
            [
                'code' => '87059090', // Código
            ],
            [
                'code' => '87011000', // Código
            ],
            [
                'code' => '87012010', // Código
            ],
            [
                'code' => '87012020', // Código
            ],
            [
                'code' => '87012090', // Código
            ],
            [
                'code' => '87013000', // Código
            ],
            [
                'code' => '87019011', // Código
            ],
            [
                'code' => '87019012', // Código
            ],
            [
                'code' => '87019019', // Código
            ],
            [
                'code' => '87019090', // Código
            ],
            [
                'code' => '87041010', // Código
            ],
            [
                'code' => '87041090', // Código
            ],
            [
                'code' => '87042161', // Código
            ],
            [
                'code' => '87042169', // Código
            ],
            [
                'code' => '87042170', // Código
            ],
            [
                'code' => '87042180', // Código
            ],
            [
                'code' => '87042190', // Código
            ],
            [
                'code' => '87042210', // Código
            ],
            [
                'code' => '87042220', // Código
            ],
            [
                'code' => '87042230', // Código
            ],
            [
                'code' => '87042271', // Código
            ],
            [
                'code' => '87042279', // Código
            ],
            [
                'code' => '87042280', // Código
            ],
            [
                'code' => '87042290', // Código
            ],
            [
                'code' => '87042311', // Código
            ],
            [
                'code' => '87042319', // Código
            ],
            [
                'code' => '87042329', // Código
            ],
            [
                'code' => '87042340', // Código
            ],
            [
                'code' => '87042351', // Código
            ],
            [
                'code' => '87042359', // Código
            ],
            [
                'code' => '87042360', // Código
            ],
            [
                'code' => '87042390', // Código
            ],
            [
                'code' => '87043161', // Código
            ],
            [
                'code' => '87043169', // Código
            ],
            [
                'code' => '87043180', // Código
            ],
            [
                'code' => '87043190', // Código
            ],
            [
                'code' => '87043220', // Código
            ],
            [
                'code' => '87043230', // Código
            ],
            [
                'code' => '87043290', // Código
            ],
            [
                'code' => '87049080', // Código
            ],
            [
                'code' => '87049090', // Código
            ],
            [
                'code' => '87053010', // Código
            ],
            [
                'code' => '87053020', // Código
            ],
            [
                'code' => '87053090', // Código
            ],
        ];

        Parametros\ZofriArancelesDeVehículos::insert($data);
    }
}
