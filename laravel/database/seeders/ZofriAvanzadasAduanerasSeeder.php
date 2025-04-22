<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriAvanzadasAduaneras;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriAvanzadasAduanerasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '3', // Código
                'name' => 'ARICA', // Nombre
                'description' => 'ARICA', // Descripción
                'customs_code' => '3', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '4', // Código
                'name' => 'VISVIRI', // Nombre
                'description' => 'VISVIRI', // Descripción
                'customs_code' => '3', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '5', // Código
                'name' => 'CHUNGARA', // Nombre
                'description' => 'CHUNGARA', // Descripción
                'customs_code' => '3', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '6', // Código
                'name' => 'CHACALLUTA', // Nombre
                'description' => 'CHACALLUTA', // Descripción
                'customs_code' => '3', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '7', // Código
                'name' => 'IQUIQUE', // Nombre
                'description' => 'IQUIQUE', // Descripción
                'customs_code' => '7', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '8', // Código
                'name' => 'CANCOSA', // Nombre
                'description' => 'CANCOSA', // Descripción
                'customs_code' => '7', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '9', // Código
                'name' => 'COLCHANE', // Nombre
                'description' => 'COLCHANE', // Descripción
                'customs_code' => '7', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '10', // Código
                'name' => 'TOCOPILLA', // Nombre
                'description' => 'TOCOPILLA', // Descripción
                'customs_code' => '10', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '12', // Código
                'name' => 'TOCORPURI', // Nombre
                'description' => 'TOCORPURI', // Descripción
                'customs_code' => '14', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '13', // Código
                'name' => 'SAN FRANCISCO', // Nombre
                'description' => 'SAN FRANCISCO', // Descripción
                'customs_code' => '17', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '14', // Código
                'name' => 'ANTOFAGASTA', // Nombre
                'description' => 'ANTOFAGASTA', // Descripción
                'customs_code' => '14', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '15', // Código
                'name' => 'OLLAGUE', // Nombre
                'description' => 'OLLAGUE', // Descripción
                'customs_code' => '14', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '16', // Código
                'name' => 'SOCOMPA', // Nombre
                'description' => 'SOCOMPA', // Descripción
                'customs_code' => '14', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '17', // Código
                'name' => 'CHAÑARAL', // Nombre
                'description' => 'CHAÑARAL', // Descripción
                'customs_code' => '17', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '18', // Código
                'name' => 'SAN PEDRO DE ATACAMA', // Nombre
                'description' => 'SAN PEDRO DE ATACAMA', // Descripción
                'customs_code' => '14', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '19', // Código
                'name' => 'JUNTAS DE COPIAPO', // Nombre
                'description' => 'JUNTAS DE COPIAPO', // Descripción
                'customs_code' => '14', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '20', // Código
                'name' => 'EL TRANSITO', // Nombre
                'description' => 'EL TRANSITO', // Descripción
                'customs_code' => '14', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '21', // Código
                'name' => 'SICO', // Nombre
                'description' => 'SICO', // Descripción
                'customs_code' => '14', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '22', // Código
                'name' => 'BECKER', // Nombre
                'description' => 'BECKER', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '25', // Código
                'name' => 'COQUIMBO', // Nombre
                'description' => 'COQUIMBO', // Descripción
                'customs_code' => '25', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '27', // Código
                'name' => 'RIVADAVIA', // Nombre
                'description' => 'RIVADAVIA', // Descripción
                'customs_code' => '25', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '28', // Código
                'name' => 'HURTADO', // Nombre
                'description' => 'HURTADO', // Descripción
                'customs_code' => '25', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '29', // Código
                'name' => 'LAS TORTOLAS', // Nombre
                'description' => 'LAS TORTOLAS', // Descripción
                'customs_code' => '25', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '30', // Código
                'name' => 'COGOTI', // Nombre
                'description' => 'COGOTI', // Descripción
                'customs_code' => '25', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '31', // Código
                'name' => 'SALAMANCA', // Nombre
                'description' => 'SALAMANCA', // Descripción
                'customs_code' => '25', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '32', // Código
                'name' => 'TULAHUEN', // Nombre
                'description' => 'TULAHUEN', // Descripción
                'customs_code' => '25', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '33', // Código
                'name' => 'LOS ANDES', // Nombre
                'description' => 'LOS ANDES', // Descripción
                'customs_code' => '33', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '34', // Código
                'name' => 'VALPARAISO', // Nombre
                'description' => 'VALPARAISO', // Descripción
                'customs_code' => '34', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '36', // Código
                'name' => 'CHINCOLCO', // Nombre
                'description' => 'CHINCOLCO', // Descripción
                'customs_code' => '33', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '38', // Código
                'name' => 'LOS LIBERTADORES', // Nombre
                'description' => 'LOS LIBERTADORES', // Descripción
                'customs_code' => '33', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '39', // Código
                'name' => 'SAN ANTONIO', // Nombre
                'description' => 'SAN ANTONIO', // Descripción
                'customs_code' => '39', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '45', // Código
                'name' => 'PORTILLO DEL MAIPO', // Nombre
                'description' => 'PORTILLO DEL MAIPO', // Descripción
                'customs_code' => '48', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '48', // Código
                'name' => 'METROPOLITANA', // Nombre
                'description' => 'METROPOLITANA', // Descripción
                'customs_code' => '48', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '50', // Código
                'name' => 'LAS LEÑAS', // Nombre
                'description' => 'LAS LEÑAS', // Descripción
                'customs_code' => '48', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '51', // Código
                'name' => 'LAGO OHIGGINS', // Nombre
                'description' => 'LAGO OHIGGINS', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '53', // Código
                'name' => 'PUENTE NEGRO', // Nombre
                'description' => 'PUENTE NEGRO', // Descripción
                'customs_code' => '48', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '55', // Código
                'name' => 'TALCAHUANO', // Nombre
                'description' => 'TALCAHUANO', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '56', // Código
                'name' => 'SAN VICENTE', // Nombre
                'description' => 'SAN VICENTE', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '57', // Código
                'name' => 'LOS QUEÑES DEL PLANCHON', // Nombre
                'description' => 'LOS QUEÑES DEL PLANCHON', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '58', // Código
                'name' => 'MAYER', // Nombre
                'description' => 'MAYER', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '59', // Código
                'name' => 'MAULE', // Nombre
                'description' => 'MAULE', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '60', // Código
                'name' => 'EL MELADO', // Nombre
                'description' => 'EL MELADO', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '61', // Código
                'name' => 'LOS CANELOS', // Nombre
                'description' => 'LOS CANELOS', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '62', // Código
                'name' => 'ATACALCO', // Nombre
                'description' => 'ATACALCO', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '63', // Código
                'name' => 'LLAIMA', // Nombre
                'description' => 'LLAIMA', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '64', // Código
                'name' => 'LONQUIMAY', // Nombre
                'description' => 'LONQUIMAY', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '65', // Código
                'name' => 'PUCON', // Nombre
                'description' => 'PUCON', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '66', // Código
                'name' => 'LAS TRANCAS', // Nombre
                'description' => 'LAS TRANCAS', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '67', // Código
                'name' => 'OSORNO', // Nombre
                'description' => 'OSORNO', // Descripción
                'customs_code' => '67', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '68', // Código
                'name' => 'PUYEHUE', // Nombre
                'description' => 'PUYEHUE', // Descripción
                'customs_code' => '67', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '69', // Código
                'name' => 'PUERTO MONTT', // Nombre
                'description' => 'PUERTO MONTT', // Descripción
                'customs_code' => '69', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '70', // Código
                'name' => 'PEULLA', // Nombre
                'description' => 'PEULLA', // Descripción
                'customs_code' => '69', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '71', // Código
                'name' => 'HUAHUM', // Nombre
                'description' => 'HUAHUM', // Descripción
                'customs_code' => '67', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '72', // Código
                'name' => 'EL LEON', // Nombre
                'description' => 'EL LEON', // Descripción
                'customs_code' => '69', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '73', // Código
                'name' => 'ANTUCO', // Nombre
                'description' => 'ANTUCO', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '74', // Código
                'name' => 'SAN FABIAN DE ALICO', // Nombre
                'description' => 'SAN FABIAN DE ALICO', // Descripción
                'customs_code' => '55', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '75', // Código
                'name' => 'LOS PATOS', // Nombre
                'description' => 'LOS PATOS', // Descripción
                'customs_code' => '33', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '76', // Código
                'name' => 'CARIRRINE', // Nombre
                'description' => 'CARIRRINE', // Descripción
                'customs_code' => '69', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '77', // Código
                'name' => 'TRIANA', // Nombre
                'description' => 'TRIANA', // Descripción
                'customs_code' => '69', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '78', // Código
                'name' => 'IBANEZ PALAVICINI', // Nombre
                'description' => 'IBANEZ PALAVICINI', // Descripción
                'customs_code' => '69', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '79', // Código
                'name' => 'RIO BELLAVISTA', // Nombre
                'description' => 'RIO BELLAVISTA', // Descripción
                'customs_code' => '92', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '80', // Código
                'name' => 'RIO MOSCO', // Nombre
                'description' => 'RIO MOSCO', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '81', // Código
                'name' => 'EL BOLSON', // Nombre
                'description' => 'EL BOLSON', // Descripción
                'customs_code' => '69', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '82', // Código
                'name' => 'FUTALEUFU', // Nombre
                'description' => 'FUTALEUFU', // Descripción
                'customs_code' => '69', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '83', // Código
                'name' => 'COYHAIQUE (PASO)', // Nombre
                'description' => 'COYHAIQUE (PASO)', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '84', // Código
                'name' => 'ALTO PALENA', // Nombre
                'description' => 'ALTO PALENA', // Descripción
                'customs_code' => '69', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '85', // Código
                'name' => 'LAGO VERDE', // Nombre
                'description' => 'LAGO VERDE', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '86', // Código
                'name' => 'COYHAIQUE (REGIONAL)', // Nombre
                'description' => 'COYHAIQUE (REGIONAL)', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '87', // Código
                'name' => 'CHILE CHICO', // Nombre
                'description' => 'CHILE CHICO', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '88', // Código
                'name' => 'APPELEG', // Nombre
                'description' => 'APPELEG', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '89', // Código
                'name' => 'HUEMULES', // Nombre
                'description' => 'HUEMULES', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '90', // Código
                'name' => 'PUERTO AYSEN', // Nombre
                'description' => 'PUERTO AYSEN', // Descripción
                'customs_code' => '90', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '91', // Código
                'name' => 'PORTEZUELO IBAÑEZ-PALAVICINI', // Nombre
                'description' => 'PORTEZUELO IBAÑEZ-PALAVICINI', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '92', // Código
                'name' => 'PUNTA ARENAS', // Nombre
                'description' => 'PUNTA ARENAS', // Descripción
                'customs_code' => '92', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '93', // Código
                'name' => 'DOROTEA', // Nombre
                'description' => 'DOROTEA', // Descripción
                'customs_code' => '92', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '94', // Código
                'name' => 'PAMPA ALTA', // Nombre
                'description' => 'PAMPA ALTA', // Descripción
                'customs_code' => '83', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '95', // Código
                'name' => 'MONTE AYMOND', // Nombre
                'description' => 'MONTE AYMOND', // Descripción
                'customs_code' => '92', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '96', // Código
                'name' => 'SAN SEBASTIAN', // Nombre
                'description' => 'SAN SEBASTIAN', // Descripción
                'customs_code' => '92', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '97', // Código
                'name' => 'LAURITA (Casas Viejas)', // Nombre
                'description' => 'LAURITA (Casas Viejas)', // Descripción
                'customs_code' => '92', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '98', // Código
                'name' => 'RIO DON GUILLERMO', // Nombre
                'description' => 'RIO DON GUILLERMO', // Descripción
                'customs_code' => '92', // Aduana Código
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriAvanzadasAduaneras::insert($data);
    }
}
