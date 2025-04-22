<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriUnidadesDeMedida;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriUnidadesDeMedidaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '1', // Código
                'name' => 'TONELADA METRICA BRUTA', // Nombre
                'description' => 'TONELADA METRICA BRUTA', // Descripción
                'acronym' => 'TMB', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '2', // Código
                'name' => 'QUINTAL METRICO BRUTO', // Nombre
                'description' => 'QUINTAL METRICO BRUTO', // Descripción
                'acronym' => 'QMB', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '3', // Código
                'name' => '1000 KILOWATT HORA', // Nombre
                'description' => '1000 KILOWATT HORA', // Descripción
                'acronym' => 'MKWH', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '4', // Código
                'name' => 'TONELADA METRICA NETA', // Nombre
                'description' => 'TONELADA METRICA NETA', // Descripción
                'acronym' => 'TMN', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '5', // Código
                'name' => 'KILATE', // Nombre
                'description' => 'KILATE', // Descripción
                'acronym' => 'KLT', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '6', // Código
                'name' => 'KILOGRAMO NETO', // Nombre
                'description' => 'KILOGRAMO NETO', // Descripción
                'acronym' => 'K.N.', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '7', // Código
                'name' => 'GRAMO', // Nombre
                'description' => 'GRAMO', // Descripción
                'acronym' => 'GN', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '8', // Código
                'name' => 'HECTOLITRO', // Nombre
                'description' => 'HECTOLITRO', // Descripción
                'acronym' => 'HL', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '9', // Código
                'name' => 'LITRO', // Nombre
                'description' => 'LITRO', // Descripción
                'acronym' => 'LT', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '10', // Código
                'name' => 'UNIDAD', // Nombre
                'description' => 'UNIDAD', // Descripción
                'acronym' => 'U', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '11', // Código
                'name' => 'DOCENA', // Nombre
                'description' => 'DOC', // Descripción
                'acronym' => 'DOC', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '12', // Código
                'name' => 'CENTENA', // Nombre
                'description' => 'CENT', // Descripción
                'acronym' => 'U(JGO)', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '13', // Código
                'name' => '1000 UNIDADES', // Nombre
                'description' => '1000 UNIDADES', // Descripción
                'acronym' => 'MU', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '14', // Código
                'name' => 'METRO LINEAL', // Nombre
                'description' => 'METRO LINEAL', // Descripción
                'acronym' => 'MT', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '15', // Código
                'name' => 'METRO CUADRADO', // Nombre
                'description' => 'METRO CUADRADO', // Descripción
                'acronym' => 'MT2', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '16', // Código
                'name' => 'METRO CÚBICO', // Nombre
                'description' => 'METRO CÚBICO', // Descripción
                'acronym' => 'MCUB', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '17', // Código
                'name' => 'PAR', // Nombre
                'description' => 'PAR', // Descripción
                'acronym' => '2U', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '18', // Código
                'name' => 'KNFC', // Nombre
                'description' => 'KNFC', // Descripción
                'acronym' => 'KNFC', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '19', // Código
                'name' => 'CARTON', // Nombre
                'description' => 'CARTON', // Descripción
                'acronym' => 'CARTON', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '20', // Código
                'name' => 'KILOWATTS-HORA', // Nombre
                'description' => 'KILOWATTS-HORA', // Descripción
                'acronym' => 'KWH', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '21', // Código
                'name' => 'KL', // Nombre
                'description' => 'KL', // Descripción
                'acronym' => 'KL', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '22', // Código
                'name' => 'GALON(3,785 LTS)', // Nombre
                'description' => 'GALON(3,785 LTS)', // Descripción
                'acronym' => 'GL', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '23', // Código
                'name' => 'BAR', // Nombre
                'description' => 'BAR', // Descripción
                'acronym' => 'BAR', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '24', // Código
                'name' => 'M2/1 MM', // Nombre
                'description' => 'M2/1 MM', // Descripción
                'acronym' => 'M2/1 MM', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '25', // Código
                'name' => 'LIBRA', // Nombre
                'description' => 'LIBRA', // Descripción
                'acronym' => 'LIBRA N', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '26', // Código
                'name' => 'GRUESA', // Nombre
                'description' => 'GRUESA', // Descripción
                'acronym' => 'GSA', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '27', // Código
                'name' => 'RESMA', // Nombre
                'description' => 'RESMA', // Descripción
                'acronym' => 'RMA', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '28', // Código
                'name' => 'YARDA', // Nombre
                'description' => 'YARDA', // Descripción
                'acronym' => 'YD', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '29', // Código
                'name' => 'PIE LINEAL', // Nombre
                'description' => 'PIE LINEAL', // Descripción
                'acronym' => 'PIE', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '30', // Código
                'name' => 'PIE CUBICO', // Nombre
                'description' => 'PIE CUBICO', // Descripción
                'acronym' => 'P3', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '31', // Código
                'name' => 'PULGADA LINEAL', // Nombre
                'description' => 'PULGADA LINEAL', // Descripción
                'acronym' => 'PUL', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '32', // Código
                'name' => 'QUINTAL METRICO NETO', // Nombre
                'description' => 'QUINTAL METRICO NETO', // Descripción
                'acronym' => 'QMN', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '33', // Código
                'name' => 'SET', // Nombre
                'description' => 'SET', // Descripción
                'acronym' => 'SET', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '34', // Código
                'name' => 'PIE CUADRADO', // Nombre
                'description' => 'PIE CUADRADO', // Descripción
                'acronym' => 'P2', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '35', // Código
                'name' => 'BRAZA', // Nombre
                'description' => 'BRAZA', // Descripción
                'acronym' => 'BR', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '36', // Código
                'name' => 'KILOGRAMO BRUTO', // Nombre
                'description' => 'KILOGRAMO BRUTO', // Descripción
                'acronym' => 'KB', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '48', // Código
                'name' => '22', // Nombre
                'description' => '22', // Descripción
                'acronym' => '22', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '99', // Código
                'name' => 'SIN UNIDAD DE MEDIDA', // Nombre
                'description' => 'SIN UNIDAD DE MEDIDA', // Descripción
                'acronym' => 'SIN UNI', // Sigla
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriUnidadesDeMedida::insert($data);
    }
}
