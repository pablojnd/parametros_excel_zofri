<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriMonedas;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriMonedasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '1', // Código
                'name' => 'PESO', // Nombre
                'description' => 'PESO ARGENTINO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '4', // Código
                'name' => 'BOLIVIANO', // Nombre
                'description' => 'BOLIVIANO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '5', // Código
                'name' => 'CRUZEIRO REAL', // Nombre
                'description' => 'CRUZEIRO REAL', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '6', // Código
                'name' => 'DÓLAR CAN', // Nombre
                'description' => 'DÓLAR', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '13', // Código
                'name' => 'DÓLAR USA', // Nombre
                'description' => 'DÓLAR', // Descripción
                'symbol' => 'USD$', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '23', // Código
                'name' => 'GUARANI', // Nombre
                'description' => 'GUARANI', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '24', // Código
                'name' => 'NUEVO SOL', // Nombre
                'description' => 'NUEVO SOL', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '26', // Código
                'name' => 'PESO URUG', // Nombre
                'description' => 'PESO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '30', // Código
                'name' => 'MARCO AL', // Nombre
                'description' => 'DEUTSHE MARK O MARCO ALEMAN', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '36', // Código
                'name' => 'DOLAR AUST', // Nombre
                'description' => 'DOLAR', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '37', // Código
                'name' => 'CHELIN', // Nombre
                'description' => 'SCHILLING O CHELIN', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '40', // Código
                'name' => 'FRANCO BEL', // Nombre
                'description' => 'FRANCO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '48', // Código
                'name' => 'RENMINBI', // Nombre
                'description' => 'RENMINBI', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '51', // Código
                'name' => 'CORONA DIN', // Nombre
                'description' => 'CORONA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '53', // Código
                'name' => 'PESETA', // Nombre
                'description' => 'PESETA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '57', // Código
                'name' => 'MARCO FIN', // Nombre
                'description' => 'MARKKA O MARCO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '58', // Código
                'name' => 'FRANCO FR', // Nombre
                'description' => 'FRANCO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '64', // Código
                'name' => 'FLORIN', // Nombre
                'description' => 'FLORIN', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '71', // Código
                'name' => 'LIRA', // Nombre
                'description' => 'LIRA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '72', // Código
                'name' => 'YEN', // Nombre
                'description' => 'YEN', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '82', // Código
                'name' => 'FRANCO SZ', // Nombre
                'description' => 'FRANCO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '96', // Código
                'name' => 'CORONA NOR', // Nombre
                'description' => 'CORONA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '97', // Código
                'name' => 'DÓLAR NZ', // Nombre
                'description' => 'DÓLAR', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '102', // Código
                'name' => 'LIBRA EST', // Nombre
                'description' => 'LIBRA ESTERLINA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '113', // Código
                'name' => 'CORONA SC', // Nombre
                'description' => 'CORONA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '127', // Código
                'name' => 'DÓLAR HK', // Nombre
                'description' => 'DÓLAR', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '128', // Código
                'name' => 'RAND', // Nombre
                'description' => 'RAND', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '129', // Código
                'name' => 'PESO COL', // Nombre
                'description' => 'PESO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '130', // Código
                'name' => 'SUCRE', // Nombre
                'description' => 'SUCRE', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '131', // Código
                'name' => 'DRACMA', // Nombre
                'description' => 'DRACMA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '132', // Código
                'name' => 'PESO MEX', // Nombre
                'description' => 'NUEVO PESO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '133', // Código
                'name' => 'ESCUDO', // Nombre
                'description' => 'ESCUDO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '134', // Código
                'name' => 'BOLIVAR', // Nombre
                'description' => 'BOLIVAR', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '135', // Código
                'name' => 'DINAR', // Nombre
                'description' => 'DINAR', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '136', // Código
                'name' => 'DÓLAR SIN', // Nombre
                'description' => 'DÓLAR', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '137', // Código
                'name' => 'RUPIA', // Nombre
                'description' => 'RUPIA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '138', // Código
                'name' => 'DÓLAR TAI', // Nombre
                'description' => 'DÓLAR', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '139', // Código
                'name' => 'DIRHAM', // Nombre
                'description' => 'DIRHAM', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '142', // Código
                'name' => 'EURO', // Nombre
                'description' => 'EURO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '200', // Código
                'name' => 'PESO CL', // Nombre
                'description' => 'PESO CHILENO', // Descripción
                'symbol' => '$', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '301', // Código
                'name' => 'WON', // Nombre
                'description' => 'WON       (CHINA)+', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '302', // Código
                'name' => 'SCHILLING AUSTRIACO', // Nombre
                'description' => 'SCHILLING AUSTRIACO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '303', // Código
                'name' => 'MARKKA', // Nombre
                'description' => 'MARKKA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '304', // Código
                'name' => 'BALBOA', // Nombre
                'description' => 'BALBOA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '305', // Código
                'name' => 'PESO FILIPINO', // Nombre
                'description' => 'PESO FILIPINO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '306', // Código
                'name' => 'COLON', // Nombre
                'description' => 'COLON', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '307', // Código
                'name' => 'QUETZAL', // Nombre
                'description' => 'QUETZAL', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '308', // Código
                'name' => 'LEV', // Nombre
                'description' => 'LEV', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '309', // Código
                'name' => 'BAHT', // Nombre
                'description' => 'BAHT                  (THAILANDIA)', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '310', // Código
                'name' => 'LEU', // Nombre
                'description' => 'LEU', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '311', // Código
                'name' => 'LIRA TURCA', // Nombre
                'description' => 'LIRA TURCA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '312', // Código
                'name' => 'PESO CUBANO', // Nombre
                'description' => 'PESO CUBANO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '313', // Código
                'name' => 'RUPIA CINGALESA', // Nombre
                'description' => 'RUPIA CINGALESA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '314', // Código
                'name' => 'RINGGIT', // Nombre
                'description' => 'RINGGIT', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '315', // Código
                'name' => 'PESO LAS BAHAMAS', // Nombre
                'description' => 'PESO LAS BAHAMAS', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '316', // Código
                'name' => 'ZLOTY', // Nombre
                'description' => 'ZLOTY               (POLONIA)', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '317', // Código
                'name' => 'LIBRA  (EGIPTO)', // Nombre
                'description' => 'LIBRA  (EGIPTO)', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '318', // Código
                'name' => 'FORINT', // Nombre
                'description' => 'FORINT', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '319', // Código
                'name' => 'PUNT', // Nombre
                'description' => 'PUNT', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '320', // Código
                'name' => 'RUPIA', // Nombre
                'description' => 'RUPIA        (PAKISTAN)', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '321', // Código
                'name' => 'ZIMBAWE', // Nombre
                'description' => 'ZIMBAWE', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '322', // Código
                'name' => 'RIAL', // Nombre
                'description' => 'RIAL', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '323', // Código
                'name' => 'FRANCO', // Nombre
                'description' => 'FRANCO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '324', // Código
                'name' => 'RYAL', // Nombre
                'description' => 'RYAL', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '325', // Código
                'name' => 'LIBRA IRLANDA', // Nombre
                'description' => 'LIBRA IRLANDA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '326', // Código
                'name' => 'CORONA ISLANDIA', // Nombre
                'description' => 'CORONA ISLANDIA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '327', // Código
                'name' => 'CORONA CHECA', // Nombre
                'description' => 'CORONA CHECA', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '328', // Código
                'name' => 'RUBLO', // Nombre
                'description' => 'RUBLO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '329', // Código
                'name' => 'DINAR YUGOESLAVO', // Nombre
                'description' => 'DINAR YUGOESLAVO', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '900', // Código
                'name' => 'OTRAS NO ESPECIFICADAS', // Nombre
                'description' => 'OTRAS NO ESPECIFICADAS', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '901', // Código
                'name' => 'ECU', // Nombre
                'description' => 'ECU', // Descripción
                'symbol' => '', // Símbolo
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriMonedas::insert($data);
    }
}
