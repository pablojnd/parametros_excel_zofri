<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriPuertosDeEmbarque;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriPuertosDeEmbarqueSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '111', // Código
                'name' => 'MONTREAL', // Nombre
                'description' => 'MONTREAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '112', // Código
                'name' => 'COSTA DEL PACÍFICO, OTROS NO ESPECIFICADOS', // Nombre
                'description' => 'COSTA DEL PACÍFICO, OTROS NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '113', // Código
                'name' => 'HALIFAX', // Nombre
                'description' => 'HALIFAX', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '114', // Código
                'name' => 'VANCOUVER', // Nombre
                'description' => 'VANCOUVER', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '115', // Código
                'name' => 'SAINT JOHN', // Nombre
                'description' => 'SAINT JOHN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '116', // Código
                'name' => 'TORONTO', // Nombre
                'description' => 'TORONTO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '117', // Código
                'name' => 'OTROS PUERTOS DE CANADÁ NO IDENTIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE CANADÁ NO IDENTIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '118', // Código
                'name' => 'BAYSIDE', // Nombre
                'description' => 'BAYSIDE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '120', // Código
                'name' => 'PORT CARTIES', // Nombre
                'description' => 'PORT CARTIES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '121', // Código
                'name' => 'COSTA DEL ATLÁNTICO, OTROS NO ESPECIFICADOS COMPRENDIDOS ENTRE MAINE Y KEY WEST', // Nombre
                'description' => 'COSTA DEL ATLÁNTICO, OTROS NO ESPECIFICADOS COMPRENDIDOS ENTRE MAINE Y KEY WEST', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '122', // Código
                'name' => 'PUERTOS DEL GOLFO DE MÉXICO, OTROS NO ESPECIFICADOS COMPRENDIDOS ENTRE KEY WEST Y BROWNSVILLE', // Nombre
                'description' => 'PUERTOS DEL GOLFO DE MÉXICO, OTROS NO ESPECIFICADOS COMPRENDIDOS ENTRE KEY WEST Y BROWNSVILLE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '123', // Código
                'name' => 'COSTA DEL PACÍFICO, OTROS NO ESPECIFICADOS', // Nombre
                'description' => 'COSTA DEL PACÍFICO, OTROS NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '124', // Código
                'name' => 'QUEBEC', // Nombre
                'description' => 'QUEBEC', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '125', // Código
                'name' => 'PRINCE RUPERT', // Nombre
                'description' => 'PRINCE RUPERT', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '126', // Código
                'name' => 'HAMILTON', // Nombre
                'description' => 'HAMILTON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '131', // Código
                'name' => 'BOSTON', // Nombre
                'description' => 'BOSTON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '132', // Código
                'name' => 'NEW HAVEN', // Nombre
                'description' => 'NEW HAVEN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '133', // Código
                'name' => 'BRIDGEPORT', // Nombre
                'description' => 'BRIDGEPORT', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '134', // Código
                'name' => 'NEW YORK', // Nombre
                'description' => 'NEW YORK', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '135', // Código
                'name' => 'FILADELFIA', // Nombre
                'description' => 'FILADELFIA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '136', // Código
                'name' => 'BALTIMORE', // Nombre
                'description' => 'BALTIMORE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '137', // Código
                'name' => 'NORFOLK', // Nombre
                'description' => 'NORFOLK', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '138', // Código
                'name' => 'WILMINGTON', // Nombre
                'description' => 'WILMINGTON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '139', // Código
                'name' => 'CHARLESTON', // Nombre
                'description' => 'CHARLESTON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '140', // Código
                'name' => 'SAVANAH', // Nombre
                'description' => 'SAVANAH', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '141', // Código
                'name' => 'MIAMI', // Nombre
                'description' => 'MIAMI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '142', // Código
                'name' => 'EVERGLADES', // Nombre
                'description' => 'EVERGLADES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '143', // Código
                'name' => 'JACKSONVILLE', // Nombre
                'description' => 'JACKSONVILLE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '145', // Código
                'name' => 'PALM BEACH', // Nombre
                'description' => 'PALM BEACH', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '146', // Código
                'name' => 'BATON ROUGE', // Nombre
                'description' => 'BATON ROUGE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '147', // Código
                'name' => 'COLUMBRES', // Nombre
                'description' => 'COLUMBRES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '148', // Código
                'name' => 'PITTSBURGH', // Nombre
                'description' => 'PITTSBURGH', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '149', // Código
                'name' => 'DULUTH', // Nombre
                'description' => 'DULUTH', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '150', // Código
                'name' => 'MILWAUKEE', // Nombre
                'description' => 'MILWAUKEE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '151', // Código
                'name' => 'TAMPA', // Nombre
                'description' => 'TAMPA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '152', // Código
                'name' => 'PENSACOLA', // Nombre
                'description' => 'PENSACOLA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '153', // Código
                'name' => 'MOBILE', // Nombre
                'description' => 'MOBILE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '154', // Código
                'name' => 'NEW ORLEANS', // Nombre
                'description' => 'NEW ORLEANS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '155', // Código
                'name' => 'PORT ARTHUR', // Nombre
                'description' => 'PORT ARTHUR', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '156', // Código
                'name' => 'GALVESTON', // Nombre
                'description' => 'GALVESTON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '157', // Código
                'name' => 'CORPUS CRISTI', // Nombre
                'description' => 'CORPUS CRISTI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '158', // Código
                'name' => 'BROWNSVILLE', // Nombre
                'description' => 'BROWNSVILLE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '159', // Código
                'name' => 'HOUSTON', // Nombre
                'description' => 'HOUSTON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '160', // Código
                'name' => 'OAKLAND', // Nombre
                'description' => 'OAKLAND', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '161', // Código
                'name' => 'STOCKTON', // Nombre
                'description' => 'STOCKTON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '171', // Código
                'name' => 'SEATTLE', // Nombre
                'description' => 'SEATTLE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '172', // Código
                'name' => 'PORTLAND', // Nombre
                'description' => 'PORTLAND', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '173', // Código
                'name' => 'SAN FRANCISCO', // Nombre
                'description' => 'SAN FRANCISCO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '174', // Código
                'name' => 'LOS ANGELES', // Nombre
                'description' => 'LOS ANGELES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '175', // Código
                'name' => 'LONG BEACH', // Nombre
                'description' => 'LONG BEACH', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '176', // Código
                'name' => 'SAN DIEGO', // Nombre
                'description' => 'SAN DIEGO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '180', // Código
                'name' => 'OTROS PUERTOS DE ESTADOS UNIDOS NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE ESTADOS UNIDOS NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '199', // Código
                'name' => 'LOS VILOS', // Nombre
                'description' => 'LOS VILOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '200', // Código
                'name' => 'AMERICA LATINA', // Nombre
                'description' => 'AMERICA LATINA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '204', // Código
                'name' => 'PATACHE', // Nombre
                'description' => 'PATACHE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '206', // Código
                'name' => 'MICHILLA', // Nombre
                'description' => 'MICHILLA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '207', // Código
                'name' => 'PUERTO ANGAMOS', // Nombre
                'description' => 'PUERTO ANGAMOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '208', // Código
                'name' => 'POSEIDON', // Nombre
                'description' => 'POSEIDON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '209', // Código
                'name' => 'TRES PUENTES', // Nombre
                'description' => 'TRES PUENTES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '210', // Código
                'name' => 'OTROS PUERTOS DE MÉXICO NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE MÉXICO NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '211', // Código
                'name' => 'TAMPICO', // Nombre
                'description' => 'TAMPICO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '212', // Código
                'name' => 'COSTA DEL PACÍFICO, OTROS PUERTOS', // Nombre
                'description' => 'COSTA DEL PACÍFICO, OTROS PUERTOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '213', // Código
                'name' => 'VERACRUZ', // Nombre
                'description' => 'VERACRUZ', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '214', // Código
                'name' => 'COATZACOALCOS', // Nombre
                'description' => 'COATZACOALCOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '215', // Código
                'name' => 'GUAYMAS', // Nombre
                'description' => 'GUAYMAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '216', // Código
                'name' => 'MAZATLAN', // Nombre
                'description' => 'MAZATLAN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '217', // Código
                'name' => 'MANZANILLO', // Nombre
                'description' => 'MANZANILLO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '218', // Código
                'name' => 'ACAPULCO', // Nombre
                'description' => 'ACAPULCO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '219', // Código
                'name' => 'GOLFO DE MÉXICO, OTROS NO ESPECIFICADOS', // Nombre
                'description' => 'GOLFO DE MÉXICO, OTROS NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '220', // Código
                'name' => 'ALTAMIRA', // Nombre
                'description' => 'ALTAMIRA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '221', // Código
                'name' => 'CRISTOBAL', // Nombre
                'description' => 'CRISTOBAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '222', // Código
                'name' => 'BALBOA', // Nombre
                'description' => 'BALBOA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '223', // Código
                'name' => 'COLON', // Nombre
                'description' => 'COLON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '224', // Código
                'name' => 'OTROS PUERTOS DE PANAMÁ NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE PANAMÁ NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '231', // Código
                'name' => 'OTROS PUERTOS DE COLOMBIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE COLOMBIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '232', // Código
                'name' => 'BUENAVENTURA', // Nombre
                'description' => 'BUENAVENTURA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '233', // Código
                'name' => 'BARRANQUILLA', // Nombre
                'description' => 'BARRANQUILLA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '241', // Código
                'name' => 'OTROS PUERTOS DE ECUADOR NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE ECUADOR NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '242', // Código
                'name' => 'GUAYAQUIL', // Nombre
                'description' => 'GUAYAQUIL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '251', // Código
                'name' => 'OTROS PUERTOS DE PERÚ NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE PERÚ NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '252', // Código
                'name' => 'CALLAO', // Nombre
                'description' => 'CALLAO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '253', // Código
                'name' => 'ILO', // Nombre
                'description' => 'ILO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '254', // Código
                'name' => 'IQUITOS', // Nombre
                'description' => 'IQUITOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '261', // Código
                'name' => 'OTROS PUERTOS DE ARGENTINA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE ARGENTINA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '262', // Código
                'name' => 'BUENOS AIRES', // Nombre
                'description' => 'BUENOS AIRES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '263', // Código
                'name' => 'NECOCHEA', // Nombre
                'description' => 'NECOCHEA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '264', // Código
                'name' => 'MENDOZA', // Nombre
                'description' => 'MENDOZA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '265', // Código
                'name' => 'CÓRDOBA', // Nombre
                'description' => 'CÓRDOBA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '266', // Código
                'name' => 'BAHIA BLANCA', // Nombre
                'description' => 'BAHIA BLANCA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '267', // Código
                'name' => 'COMODORO RIVADAVIA', // Nombre
                'description' => 'COMODORO RIVADAVIA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '268', // Código
                'name' => 'PUERTO MADRYN', // Nombre
                'description' => 'PUERTO MADRYN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '269', // Código
                'name' => 'MAR DEL PLATA', // Nombre
                'description' => 'MAR DEL PLATA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '270', // Código
                'name' => 'ROSARIO', // Nombre
                'description' => 'ROSARIO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '271', // Código
                'name' => 'OTROS PUERTOS DE URUGUAY NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE URUGUAY NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '272', // Código
                'name' => 'MONTEVIDEO', // Nombre
                'description' => 'MONTEVIDEO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '281', // Código
                'name' => 'OTROS PUERTOS DE VENEZUELA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE VENEZUELA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '282', // Código
                'name' => 'LA GUAIRA', // Nombre
                'description' => 'LA GUAIRA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '285', // Código
                'name' => 'MARACAIBO', // Nombre
                'description' => 'MARACAIBO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '291', // Código
                'name' => 'OTROS PUERTOS DE BRASIL NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE BRASIL NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '292', // Código
                'name' => 'SANTOS', // Nombre
                'description' => 'SANTOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '293', // Código
                'name' => 'RIO DE JANEIRO', // Nombre
                'description' => 'RIO DE JANEIRO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '294', // Código
                'name' => 'RIO GRANDE DEL SUR', // Nombre
                'description' => 'RIO GRANDE DEL SUR', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '295', // Código
                'name' => 'PARANAGUA', // Nombre
                'description' => 'PARANAGUA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '296', // Código
                'name' => 'SAO PAULO', // Nombre
                'description' => 'SAO PAULO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '297', // Código
                'name' => 'SALVADOR', // Nombre
                'description' => 'SALVADOR', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '301', // Código
                'name' => 'OTROS PUERTOS DE LAS ANTILLAS HOLANDESAS NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE LAS ANTILLAS HOLANDESAS NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '302', // Código
                'name' => 'CURAZAO', // Nombre
                'description' => 'CURAZAO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '399', // Código
                'name' => 'OTROS PUERTOS DE AMÉRICA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE AMÉRICA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '411', // Código
                'name' => 'SHANGAI', // Nombre
                'description' => 'SHANGAI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '412', // Código
                'name' => 'DAIREN', // Nombre
                'description' => 'DAIREN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '413', // Código
                'name' => 'OTROS PUERTOS DE CHINA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE CHINA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '421', // Código
                'name' => 'NANPO', // Nombre
                'description' => 'NANPO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '422', // Código
                'name' => 'BUSAN CY (PUSAN)', // Nombre
                'description' => 'BUSAN CY (PUSAN)', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '423', // Código
                'name' => 'OTROS PUERTOS DE COREA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE COREA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '431', // Código
                'name' => 'MANILA', // Nombre
                'description' => 'MANILA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '432', // Código
                'name' => 'OTROS PUERTOS DE FILIPINAS NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE FILIPINAS NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '441', // Código
                'name' => 'OTROS PUERTOS DE JAPON NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE JAPON NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '442', // Código
                'name' => 'OSAKA', // Nombre
                'description' => 'OSAKA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '443', // Código
                'name' => 'KOBE', // Nombre
                'description' => 'KOBE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '444', // Código
                'name' => 'YOKOHAMA', // Nombre
                'description' => 'YOKOHAMA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '445', // Código
                'name' => 'NAGOYA', // Nombre
                'description' => 'NAGOYA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '446', // Código
                'name' => 'SHIMIZUI', // Nombre
                'description' => 'SHIMIZUI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '447', // Código
                'name' => 'MOJI', // Nombre
                'description' => 'MOJI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '448', // Código
                'name' => 'YAWATA', // Nombre
                'description' => 'YAWATA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '449', // Código
                'name' => 'FUKUYAMA', // Nombre
                'description' => 'FUKUYAMA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '451', // Código
                'name' => 'KAOHSIUNG', // Nombre
                'description' => 'KAOHSIUNG', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '452', // Código
                'name' => 'KEELUNG', // Nombre
                'description' => 'KEELUNG', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '453', // Código
                'name' => 'OTROS PUERTOS DE TAIWAN NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE TAIWAN NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '461', // Código
                'name' => 'KARHG ISLAND', // Nombre
                'description' => 'KARHG ISLAND', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '462', // Código
                'name' => 'OTROS PUERTOS DE IRAN NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE IRAN NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '471', // Código
                'name' => 'CALCUTA', // Nombre
                'description' => 'CALCUTA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '472', // Código
                'name' => 'OTROS PUERTOS DE INDIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE INDIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '481', // Código
                'name' => 'CHALNA', // Nombre
                'description' => 'CHALNA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '482', // Código
                'name' => 'OTROS PUERTOS DE BANGLADESH NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE BANGLADESH NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '491', // Código
                'name' => 'OTROS PUERTOS DE SINGAPUR NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE SINGAPUR NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '492', // Código
                'name' => 'HONG KONG', // Nombre
                'description' => 'HONG KONG', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '499', // Código
                'name' => 'OTROS PUERTOS ASIÁTICOS NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS ASIÁTICOS NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '500', // Código
                'name' => 'EUROPA', // Nombre
                'description' => 'EUROPA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '511', // Código
                'name' => 'CONSTANZA', // Nombre
                'description' => 'CONSTANZA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '512', // Código
                'name' => 'OTROS PUERTOS DE RUMANIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE RUMANIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '521', // Código
                'name' => 'VARNA', // Nombre
                'description' => 'VARNA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '522', // Código
                'name' => 'OTROS PUERTOS DE BULGARIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE BULGARIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '531', // Código
                'name' => 'RIJEKA', // Nombre
                'description' => 'RIJEKA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '532', // Código
                'name' => 'OTROS PUERTOS DE YUGOESLAVIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE YUGOESLAVIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '541', // Código
                'name' => 'OTROS PUERTOS DE ITALIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE ITALIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '542', // Código
                'name' => 'GENOVA', // Nombre
                'description' => 'GENOVA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '543', // Código
                'name' => 'LIORNA, LIVORNO', // Nombre
                'description' => 'LIORNA, LIVORNO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '544', // Código
                'name' => 'NAPOLES', // Nombre
                'description' => 'NAPOLES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '545', // Código
                'name' => 'SALERNO', // Nombre
                'description' => 'SALERNO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '546', // Código
                'name' => 'AUGUSTA', // Nombre
                'description' => 'AUGUSTA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '547', // Código
                'name' => 'SAVONA', // Nombre
                'description' => 'SAVONA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '551', // Código
                'name' => 'OTROS PUERTOS DE FRANCIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE FRANCIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '552', // Código
                'name' => 'LA PALLICE', // Nombre
                'description' => 'LA PALLICE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '553', // Código
                'name' => 'LE HAVRE', // Nombre
                'description' => 'LE HAVRE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '554', // Código
                'name' => 'MARSELLA', // Nombre
                'description' => 'MARSELLA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '555', // Código
                'name' => 'BURDEOS', // Nombre
                'description' => 'BURDEOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '556', // Código
                'name' => 'CALAIS', // Nombre
                'description' => 'CALAIS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '557', // Código
                'name' => 'BREST', // Nombre
                'description' => 'BREST', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '558', // Código
                'name' => 'RUAN', // Nombre
                'description' => 'RUAN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '561', // Código
                'name' => 'OTROS PUERTOS DE ESPAÑA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE ESPAÑA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '562', // Código
                'name' => 'CADIZ', // Nombre
                'description' => 'CADIZ', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '563', // Código
                'name' => 'BARCELONA', // Nombre
                'description' => 'BARCELONA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '564', // Código
                'name' => 'BILBAO', // Nombre
                'description' => 'BILBAO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '565', // Código
                'name' => 'HUELVA', // Nombre
                'description' => 'HUELVA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '566', // Código
                'name' => 'SEVILLA', // Nombre
                'description' => 'SEVILLA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '567', // Código
                'name' => 'TARRAGONA', // Nombre
                'description' => 'TARRAGONA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '571', // Código
                'name' => 'LIVERPOOL', // Nombre
                'description' => 'LIVERPOOL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '572', // Código
                'name' => 'LONDRES', // Nombre
                'description' => 'LONDRES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '573', // Código
                'name' => 'ROCHESTER', // Nombre
                'description' => 'ROCHESTER', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '574', // Código
                'name' => 'ETEN SALVERRY', // Nombre
                'description' => 'ETEN SALVERRY', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '576', // Código
                'name' => 'OTROS PUERTOS DE INGLATERRA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE INGLATERRA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '577', // Código
                'name' => 'DOVER', // Nombre
                'description' => 'DOVER', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '578', // Código
                'name' => 'PLYMOUTH', // Nombre
                'description' => 'PLYMOUTH', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '581', // Código
                'name' => 'HELSINSKI', // Nombre
                'description' => 'HELSINSKI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '582', // Código
                'name' => 'OTROS PUERTOS DE FINLANDIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE FINLANDIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '583', // Código
                'name' => 'HANKO', // Nombre
                'description' => 'HANKO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '584', // Código
                'name' => 'KEMI', // Nombre
                'description' => 'KEMI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '585', // Código
                'name' => 'KOKKOLA', // Nombre
                'description' => 'KOKKOLA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '586', // Código
                'name' => 'KOTKA', // Nombre
                'description' => 'KOTKA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '587', // Código
                'name' => 'OULO', // Nombre
                'description' => 'OULO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '588', // Código
                'name' => 'PIETARSAARI', // Nombre
                'description' => 'PIETARSAARI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '589', // Código
                'name' => 'PORI', // Nombre
                'description' => 'PORI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '590', // Código
                'name' => 'ALEMANIA OCCIDENTAL', // Nombre
                'description' => 'ALEMANIA OCCIDENTAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '591', // Código
                'name' => 'BREMEN', // Nombre
                'description' => 'BREMEN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '592', // Código
                'name' => 'HAMBURGO', // Nombre
                'description' => 'HAMBURGO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '593', // Código
                'name' => 'NUREMBERG', // Nombre
                'description' => 'NUREMBERG', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '594', // Código
                'name' => 'FRANKFURT', // Nombre
                'description' => 'FRANKFURT', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '595', // Código
                'name' => 'DUSSELDORF', // Nombre
                'description' => 'DUSSELDORF', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '596', // Código
                'name' => 'OTROS PUERTOS DE ALEMANIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE ALEMANIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '597', // Código
                'name' => 'CUXHAVEN', // Nombre
                'description' => 'CUXHAVEN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '598', // Código
                'name' => 'ROSTOCK', // Nombre
                'description' => 'ROSTOCK', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '599', // Código
                'name' => 'OLDENBURG', // Nombre
                'description' => 'OLDENBURG', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '601', // Código
                'name' => 'AMBERES', // Nombre
                'description' => 'AMBERES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '602', // Código
                'name' => 'OTROS PUERTOS DE BÉLGICA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE BÉLGICA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '603', // Código
                'name' => 'ZEEBRUGGE', // Nombre
                'description' => 'ZEEBRUGGE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '604', // Código
                'name' => 'GHENT', // Nombre
                'description' => 'GHENT', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '605', // Código
                'name' => 'OOSTENDE', // Nombre
                'description' => 'OOSTENDE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '611', // Código
                'name' => 'LISBOA', // Nombre
                'description' => 'LISBOA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '612', // Código
                'name' => 'OTROS PUERTOS DE PORTUGAL NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE PORTUGAL NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '613', // Código
                'name' => 'SETUBAL', // Nombre
                'description' => 'SETUBAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '621', // Código
                'name' => 'AMSTERDAM', // Nombre
                'description' => 'AMSTERDAM', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '622', // Código
                'name' => 'ROTTERDAM', // Nombre
                'description' => 'ROTTERDAM', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '623', // Código
                'name' => 'OTROS PUERTOS DE HOLANDA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE HOLANDA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '631', // Código
                'name' => 'GOTEMBURGO', // Nombre
                'description' => 'GOTEMBURGO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '632', // Código
                'name' => 'OTROS PUERTOS DE SUECIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE SUECIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '633', // Código
                'name' => 'MALMO', // Nombre
                'description' => 'MALMO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '634', // Código
                'name' => 'HELSIMBORG', // Nombre
                'description' => 'HELSIMBORG', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '635', // Código
                'name' => 'KALMAR', // Nombre
                'description' => 'KALMAR', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '641', // Código
                'name' => 'AARHUS', // Nombre
                'description' => 'AARHUS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '642', // Código
                'name' => 'COPENHAGEN', // Nombre
                'description' => 'COPENHAGEN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '643', // Código
                'name' => 'OTROS PUERTOS DE DINAMARCA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE DINAMARCA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '644', // Código
                'name' => 'AALBORG', // Nombre
                'description' => 'AALBORG', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '645', // Código
                'name' => 'ODENSE', // Nombre
                'description' => 'ODENSE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '651', // Código
                'name' => 'OSLO', // Nombre
                'description' => 'OSLO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '652', // Código
                'name' => 'OTROS PUERTOS DE NORUEGA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE NORUEGA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '653', // Código
                'name' => 'STAVANGER', // Nombre
                'description' => 'STAVANGER', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '699', // Código
                'name' => 'OTROS PUERTOS DE EUROPA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE EUROPA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '711', // Código
                'name' => 'DURBAM', // Nombre
                'description' => 'DURBAM', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '712', // Código
                'name' => 'CIUDAD DEL CABO', // Nombre
                'description' => 'CIUDAD DEL CABO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '713', // Código
                'name' => 'OTROS PUERTOS DE SUDÁFRICA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE SUDÁFRICA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '714', // Código
                'name' => 'SALDANHA', // Nombre
                'description' => 'SALDANHA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '715', // Código
                'name' => 'PORT-ELIZABETH', // Nombre
                'description' => 'PORT-ELIZABETH', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '716', // Código
                'name' => 'MOSSEL-BAY', // Nombre
                'description' => 'MOSSEL-BAY', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '717', // Código
                'name' => 'EAST-LONDON', // Nombre
                'description' => 'EAST-LONDON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '799', // Código
                'name' => 'OTROS PUERTOS DE ÁFRICA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE ÁFRICA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '811', // Código
                'name' => 'SIDNEY', // Nombre
                'description' => 'SIDNEY', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '812', // Código
                'name' => 'FREMANTLE', // Nombre
                'description' => 'FREMANTLE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '813', // Código
                'name' => 'OTROS PUERTOS DE AUSTRALIA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE AUSTRALIA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '814', // Código
                'name' => 'ADELAIDA', // Nombre
                'description' => 'ADELAIDA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '815', // Código
                'name' => 'DARWIN', // Nombre
                'description' => 'DARWIN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '816', // Código
                'name' => 'GERALDTON', // Nombre
                'description' => 'GERALDTON', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '899', // Código
                'name' => 'OTROS PUERTOS DE OCEANÍA NO ESPECIFICADOS', // Nombre
                'description' => 'OTROS PUERTOS DE OCEANÍA NO ESPECIFICADOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '900', // Código
                'name' => 'RANCHO DE NAVES Y AERONAVES DE TRANSPORTE INTERNACIONAL', // Nombre
                'description' => 'RANCHO DE NAVES Y AERONAVES DE TRANSPORTE INTERNACIONAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '901', // Código
                'name' => 'ARICA', // Nombre
                'description' => 'ARICA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '902', // Código
                'name' => 'IQUIQUE', // Nombre
                'description' => 'IQUIQUE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '903', // Código
                'name' => 'ANTOFAGASTA', // Nombre
                'description' => 'ANTOFAGASTA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '904', // Código
                'name' => 'COQUIMBO', // Nombre
                'description' => 'COQUIMBO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '905', // Código
                'name' => 'VALPARAÍSO', // Nombre
                'description' => 'VALPARAÍSO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '906', // Código
                'name' => 'SAN ANTONIO', // Nombre
                'description' => 'SAN ANTONIO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '907', // Código
                'name' => 'TALCAHUANO', // Nombre
                'description' => 'TALCAHUANO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '908', // Código
                'name' => 'SAN VICENTE', // Nombre
                'description' => 'SAN VICENTE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '909', // Código
                'name' => 'LIRQUEN', // Nombre
                'description' => 'LIRQUEN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '910', // Código
                'name' => 'PUERTO MONTT', // Nombre
                'description' => 'PUERTO MONTT', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '911', // Código
                'name' => 'CHACABUCO / PUERTO AYSEN', // Nombre
                'description' => 'CHACABUCO / PUERTO AYSEN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '912', // Código
                'name' => 'PUNTA ARENAS', // Nombre
                'description' => 'PUNTA ARENAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '913', // Código
                'name' => 'PATILLOS', // Nombre
                'description' => 'PATILLOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '914', // Código
                'name' => 'TOCOPILLA', // Nombre
                'description' => 'TOCOPILLA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '915', // Código
                'name' => 'MEJILLONES', // Nombre
                'description' => 'MEJILLONES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '916', // Código
                'name' => 'TALTAL', // Nombre
                'description' => 'TALTAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '917', // Código
                'name' => 'CHAÑARAL / BARQUITO', // Nombre
                'description' => 'CHAÑARAL / BARQUITO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '918', // Código
                'name' => 'CALDERA', // Nombre
                'description' => 'CALDERA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '919', // Código
                'name' => 'CALDERILLA', // Nombre
                'description' => 'CALDERILLA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '920', // Código
                'name' => 'HUASCO / GUACOLDA', // Nombre
                'description' => 'HUASCO / GUACOLDA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '921', // Código
                'name' => 'QUINTERO', // Nombre
                'description' => 'QUINTERO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '922', // Código
                'name' => 'JUAN FERNANDEZ', // Nombre
                'description' => 'JUAN FERNANDEZ', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '923', // Código
                'name' => 'CONSTITUCION', // Nombre
                'description' => 'CONSTITUCION', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '924', // Código
                'name' => 'TOME', // Nombre
                'description' => 'TOME', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '925', // Código
                'name' => 'PENCO', // Nombre
                'description' => 'PENCO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '926', // Código
                'name' => 'CORONEL', // Nombre
                'description' => 'CORONEL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '927', // Código
                'name' => 'LOTA', // Nombre
                'description' => 'LOTA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '928', // Código
                'name' => 'LEBU', // Nombre
                'description' => 'LEBU', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '929', // Código
                'name' => 'ISLA DE PASCUA', // Nombre
                'description' => 'ISLA DE PASCUA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '930', // Código
                'name' => 'CORRAL', // Nombre
                'description' => 'CORRAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '931', // Código
                'name' => 'ANCUD', // Nombre
                'description' => 'ANCUD', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '932', // Código
                'name' => 'CASTRO', // Nombre
                'description' => 'CASTRO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '933', // Código
                'name' => 'QUELLÓN', // Nombre
                'description' => 'QUELLÓN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '934', // Código
                'name' => 'CHAITÉN', // Nombre
                'description' => 'CHAITÉN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '935', // Código
                'name' => 'TORTEL', // Nombre
                'description' => 'TORTEL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '936', // Código
                'name' => 'NATALES', // Nombre
                'description' => 'NATALES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '937', // Código
                'name' => 'GUARELLO', // Nombre
                'description' => 'GUARELLO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '938', // Código
                'name' => 'CUTTERCOVE', // Nombre
                'description' => 'CUTTERCOVE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '939', // Código
                'name' => 'PERCY', // Nombre
                'description' => 'PERCY', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '940', // Código
                'name' => 'CLARENCIA', // Nombre
                'description' => 'CLARENCIA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '941', // Código
                'name' => 'GREGORIO', // Nombre
                'description' => 'GREGORIO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '942', // Código
                'name' => 'CABO NEGRO', // Nombre
                'description' => 'CABO NEGRO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '943', // Código
                'name' => 'PUERTO WILLIAMS', // Nombre
                'description' => 'PUERTO WILLIAMS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '944', // Código
                'name' => 'TERRITORIO ANTÁRTICO CHILENO', // Nombre
                'description' => 'TERRITORIO ANTÁRTICO CHILENO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '945', // Código
                'name' => 'SALINAS', // Nombre
                'description' => 'SALINAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '946', // Código
                'name' => 'GUAYACAN', // Nombre
                'description' => 'GUAYACAN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '947', // Código
                'name' => 'PUNTA DELGADA', // Nombre
                'description' => 'PUNTA DELGADA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '948', // Código
                'name' => 'VENTANAS', // Nombre
                'description' => 'VENTANAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '949', // Código
                'name' => 'PINO HACHADO(LIUCURA', // Nombre
                'description' => 'PINO HACHADO(LIUCURA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '950', // Código
                'name' => 'CALETA COLOSO', // Nombre
                'description' => 'CALETA COLOSO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '951', // Código
                'name' => 'AGUAS NEGRAS', // Nombre
                'description' => 'AGUAS NEGRAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '952', // Código
                'name' => 'ZONA FRANCA IQUIQUE', // Nombre
                'description' => 'ZONA FRANCA IQUIQUE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '953', // Código
                'name' => 'ZONA FRANCA PUNTA ARENAS', // Nombre
                'description' => 'ZONA FRANCA PUNTA ARENAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '954', // Código
                'name' => 'RIO MAYER', // Nombre
                'description' => 'RIO MAYER', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '955', // Código
                'name' => 'RIO MOSCO', // Nombre
                'description' => 'RIO MOSCO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '956', // Código
                'name' => 'VISVIRI', // Nombre
                'description' => 'VISVIRI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '957', // Código
                'name' => 'CHACALLUTA', // Nombre
                'description' => 'CHACALLUTA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '958', // Código
                'name' => 'CHUNGARA', // Nombre
                'description' => 'CHUNGARA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '959', // Código
                'name' => 'COLCHANE', // Nombre
                'description' => 'COLCHANE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '960', // Código
                'name' => 'ABRA DE NAPA', // Nombre
                'description' => 'ABRA DE NAPA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '961', // Código
                'name' => 'OLLAGUE', // Nombre
                'description' => 'OLLAGUE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '962', // Código
                'name' => 'SAN PEDRO DE ATACAMA', // Nombre
                'description' => 'SAN PEDRO DE ATACAMA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '963', // Código
                'name' => 'SOCOMPA', // Nombre
                'description' => 'SOCOMPA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '964', // Código
                'name' => 'SAN FRANCISCO', // Nombre
                'description' => 'SAN FRANCISCO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '965', // Código
                'name' => 'LOS LIBERTADORES', // Nombre
                'description' => 'LOS LIBERTADORES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '966', // Código
                'name' => 'MAHUIL MALAL', // Nombre
                'description' => 'MAHUIL MALAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '967', // Código
                'name' => 'CARDENAL SAMORE', // Nombre
                'description' => 'CARDENAL SAMORE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '968', // Código
                'name' => 'PEREZ ROSALES', // Nombre
                'description' => 'PEREZ ROSALES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '969', // Código
                'name' => 'FUTALEUFU', // Nombre
                'description' => 'FUTALEUFU', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '970', // Código
                'name' => 'PALENA-CARRENLEUFU', // Nombre
                'description' => 'PALENA-CARRENLEUFU', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '971', // Código
                'name' => 'PANGUIPULLI', // Nombre
                'description' => 'PANGUIPULLI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '972', // Código
                'name' => 'HUAHUM', // Nombre
                'description' => 'HUAHUM', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '973', // Código
                'name' => 'LAGO VERDE', // Nombre
                'description' => 'LAGO VERDE', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '974', // Código
                'name' => 'APPELEG', // Nombre
                'description' => 'APPELEG', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '975', // Código
                'name' => 'PAMPA ALTA', // Nombre
                'description' => 'PAMPA ALTA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '976', // Código
                'name' => 'HUEMULES', // Nombre
                'description' => 'HUEMULES', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '977', // Código
                'name' => 'CHILE CHICO', // Nombre
                'description' => 'CHILE CHICO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '978', // Código
                'name' => 'BAKER', // Nombre
                'description' => 'BAKER', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '979', // Código
                'name' => 'DOROTEA', // Nombre
                'description' => 'DOROTEA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '980', // Código
                'name' => 'CASAS VIEJAS', // Nombre
                'description' => 'CASAS VIEJAS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '981', // Código
                'name' => 'MONTE AYMOND', // Nombre
                'description' => 'MONTE AYMOND', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '982', // Código
                'name' => 'SAN SEBASTIAN', // Nombre
                'description' => 'SAN SEBASTIAN', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '983', // Código
                'name' => 'COYHAIQUE ALTO', // Nombre
                'description' => 'COYHAIQUE ALTO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '984', // Código
                'name' => 'TRIANA', // Nombre
                'description' => 'TRIANA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '985', // Código
                'name' => 'IBANEZ PALAVICINI', // Nombre
                'description' => 'IBANEZ PALAVICINI', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '986', // Código
                'name' => 'VILLA OHIGGINS', // Nombre
                'description' => 'VILLA OHIGGINS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '987', // Código
                'name' => 'AEROP.CHACALLUTA', // Nombre
                'description' => 'AEROP.CHACALLUTA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '988', // Código
                'name' => 'AEROP.DIEGO ARACENA', // Nombre
                'description' => 'AEROP.DIEGO ARACENA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '989', // Código
                'name' => 'AEROP.CERRO MORENO', // Nombre
                'description' => 'AEROP.CERRO MORENO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '990', // Código
                'name' => 'AEROP.EL TEPUAL', // Nombre
                'description' => 'AEROP.EL TEPUAL', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '991', // Código
                'name' => 'AEROP.C.I.DEL CAMPO', // Nombre
                'description' => 'AEROP.C.I.DEL CAMPO', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '992', // Código
                'name' => 'AEROP.A.M.BENITEZ', // Nombre
                'description' => 'AEROP.A.M.BENITEZ', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '994', // Código
                'name' => 'ARICA-TACNA', // Nombre
                'description' => 'ARICA-TACNA', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '995', // Código
                'name' => 'ARICA-LA PAZ', // Nombre
                'description' => 'ARICA-LA PAZ', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '997', // Código
                'name' => 'OTROS PUERTOS CHILENOS', // Nombre
                'description' => 'OTROS PUERTOS CHILENOS', // Descripción
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriPuertosDeEmbarque::insert($data);
    }
}
