<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriOrganismosExternos;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriOrganismosExternosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '1', // Código
                'name' => 'SAG', // Nombre
                'description' => 'SERVICIO AGRÍCOLA GANADERO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '2', // Código
                'name' => 'SNS', // Nombre
                'description' => 'SERVICIO SALUD', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '3', // Código
                'name' => 'SAG y SNS', // Nombre
                'description' => 'SAG Y SALUD', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '4', // Código
                'name' => 'D. GRAL. MOV. NAC.', // Nombre
                'description' => 'DIRECCIÓN GENERAL DE MOVILIZACIÓN NACIONAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '5', // Código
                'name' => 'SERNAPESCA', // Nombre
                'description' => 'SERVICIO NACIONAL DE PESCA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '6', // Código
                'name' => 'OTROS', // Nombre
                'description' => 'OTROS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '7', // Código
                'name' => 'PROC. AFORO 2º', // Nombre
                'description' => 'PROC. AFORO INCISO 2º', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '8', // Código
                'name' => 'PROC. AFORO 3º', // Nombre
                'description' => 'PROC. AFORO INCISO 3º', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '9', // Código
                'name' => 'C. MONUMENTOS', // Nombre
                'description' => 'COMISIÓN DE MONUMENTOS NACIONALES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '10', // Código
                'name' => 'CONAF', // Nombre
                'description' => 'CORPORACIÓN NACIONAL FORESTAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '11', // Código
                'name' => 'COM.ENER.NUCLEAR', // Nombre
                'description' => 'COMISIÓN NACIONAL DE ENERGÍA NUCLEAR', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '12', // Código
                'name' => 'DIFROL', // Nombre
                'description' => 'DIRECCIÓN DE FRONTERAS Y LÍMITES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '13', // Código
                'name' => 'ISP', // Nombre
                'description' => 'INSTITUTO DE SALUD PÚBLICA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '14', // Código
                'name' => 'D. BIB, ARCH. Y MUS.', // Nombre
                'description' => 'DIRECCIÓN DE BIBLIOTECAS, ARCHIVOS Y MUSEOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '16', // Código
                'name' => 'ADUANA', // Nombre
                'description' => 'CALIFICACIÓN DE SERVICIO DE EXPO-ADUANA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '17', // Código
                'name' => 'MINIDEFNAC', // Nombre
                'description' => 'MINISTERIO DE DEFENSA NACIONAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '18', // Código
                'name' => 'ARM.QUIM.BIO', // Nombre
                'description' => 'DEPTO. DE ARMAS QUÍMICAS Y BIOLÓGICAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '19', // Código
                'name' => 'ARM.EXPLOS', // Nombre
                'description' => 'DEPTO. DE CONTROL DE ARMAS Y EXPLOSIVOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '20', // Código
                'name' => 'CITES', // Nombre
                'description' => 'CERTIFICACIÓN CITES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '30', // Código
                'name' => 'C ORIGEN', // Nombre
                'description' => 'CERTIFICADO DE ORIGEN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '31', // Código
                'name' => 'FFAA', // Nombre
                'description' => 'FUERZAS ARMADAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriOrganismosExternos::insert($data);
    }
}
