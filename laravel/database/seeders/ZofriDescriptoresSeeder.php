<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametros\ZofriDescriptores;
use App\Enums\VigenciaEnum;
use Illuminate\Support\Facades\DB;

class ZofriDescriptoresSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'code' => '1', // Código
                'name' => 'Nombre Del Producto', // Nombre
                'description' => 'Nombre de la Mercancía           ', // Descripción
                'print_label' => 'Nombre', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => 'D', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '2', // Código
                'name' => 'Modelo', // Nombre
                'description' => 'Modelo de la Mercancía', // Descripción
                'print_label' => 'Modelo', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => 'D', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '3', // Código
                'name' => 'Tipo', // Nombre
                'description' => 'Tipo', // Descripción
                'print_label' => 'Tipo', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => 'D', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '4', // Código
                'name' => 'Marca del Producto', // Nombre
                'description' => 'Marca del Producto', // Descripción
                'print_label' => 'Marca', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => 'D', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '5', // Código
                'name' => 'Año', // Nombre
                'description' => 'Año', // Descripción
                'print_label' => 'Año', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '4', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '6', // Código
                'name' => 'Tipo de Encendido', // Nombre
                'description' => 'Tipo de Encendido', // Descripción
                'print_label' => 'Encend', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '05', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '7', // Código
                'name' => 'Número de Serie', // Nombre
                'description' => 'Número de Serie', // Descripción
                'print_label' => 'N° Serie', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '8', // Código
                'name' => 'Número de Chassis', // Nombre
                'description' => 'Número de Chassis', // Descripción
                'print_label' => 'Chassis', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '9', // Código
                'name' => 'Número de Motor', // Nombre
                'description' => 'Número de Motor', // Descripción
                'print_label' => 'Motor', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '10', // Código
                'name' => 'Cilindrada', // Nombre
                'description' => 'Cilindrada', // Descripción
                'print_label' => 'Cilind', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '5', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '11', // Código
                'name' => 'Peso Total con Carga Máxima', // Nombre
                'description' => 'Peso Total con Carga Máxima', // Descripción
                'print_label' => 'Peso.Tot.Carg.Max.', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '12', // Código
                'name' => 'Asientos', // Nombre
                'description' => 'Asientos', // Descripción
                'print_label' => 'Asientos', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '3', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '13', // Código
                'name' => 'Tipo Cabina', // Nombre
                'description' => 'Tipo Cabina', // Descripción
                'print_label' => 'Cabina', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '02', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '14', // Código
                'name' => 'Capacidad Carga Util en Kgrs.', // Nombre
                'description' => 'Capacidad Carga Util en Kgrs.', // Descripción
                'print_label' => 'Cap.Carg.Util.Kg.', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '15', // Código
                'name' => 'Capacidad Carga Util en Tonel. Mts.', // Nombre
                'description' => 'Capacidad Carga Util en Tonel. Mts.', // Descripción
                'print_label' => 'Cap.Carg.Util.Ton.', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '16', // Código
                'name' => 'Sistema de Tracción', // Nombre
                'description' => 'Sistema de Tracción', // Descripción
                'print_label' => 'Tracción', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '06', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '17', // Código
                'name' => 'Descripción', // Nombre
                'description' => 'Descripción', // Descripción
                'print_label' => 'Descrip', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '18', // Código
                'name' => 'Tipo de Vehículo', // Nombre
                'description' => 'Tipo de Vehículo', // Descripción
                'print_label' => 'T.Vehic', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '01', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '19', // Código
                'name' => 'Color Unico', // Nombre
                'description' => 'Color Unico', // Descripción
                'print_label' => 'Color', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '03', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '20', // Código
                'name' => 'Color 1', // Nombre
                'description' => 'Color 1', // Descripción
                'print_label' => 'Color', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '03', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '21', // Código
                'name' => 'Color 2', // Nombre
                'description' => 'Color 2', // Descripción
                'print_label' => 'Color', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '03', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '22', // Código
                'name' => 'Color 3', // Nombre
                'description' => 'Color 3', // Descripción
                'print_label' => 'Color', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '03', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '23', // Código
                'name' => 'Código Producto', // Nombre
                'description' => 'Código Producto', // Descripción
                'print_label' => 'Cod.Prod', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '24', // Código
                'name' => 'Información Adicional', // Nombre
                'description' => 'Información Adicional', // Descripción
                'print_label' => 'Inf.Adic.', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => 'G', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '25', // Código
                'name' => 'Nombre comercial', // Nombre
                'description' => 'Nombre comercial', // Descripción
                'print_label' => 'Nomb.Come', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '26', // Código
                'name' => 'Composición (%)', // Nombre
                'description' => 'Composición (%)', // Descripción
                'print_label' => 'Comp%', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '3', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '27', // Código
                'name' => 'Material Capellada', // Nombre
                'description' => 'Material Capellada', // Descripción
                'print_label' => 'Mat.Capellada', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '28', // Código
                'name' => 'Material Planta', // Nombre
                'description' => 'Material Planta', // Descripción
                'print_label' => 'Mat.Planta', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '29', // Código
                'name' => 'Peso', // Nombre
                'description' => 'Peso', // Descripción
                'print_label' => 'Peso', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '30', // Código
                'name' => 'Talla', // Nombre
                'description' => 'Talla', // Descripción
                'print_label' => 'Talla', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '5', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '31', // Código
                'name' => 'Presentación', // Nombre
                'description' => 'Presentación', // Descripción
                'print_label' => 'Presentación', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '32', // Código
                'name' => 'Tipo envase', // Nombre
                'description' => 'Tipo envase', // Descripción
                'print_label' => 'T.Env', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '33', // Código
                'name' => 'Tipo de producto', // Nombre
                'description' => 'Tipo de producto', // Descripción
                'print_label' => 'T.Prod', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '34', // Código
                'name' => 'Fabricante', // Nombre
                'description' => 'Fabricante', // Descripción
                'print_label' => 'Fab', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '35', // Código
                'name' => 'Año Fabricación', // Nombre
                'description' => 'Año Fabricación', // Descripción
                'print_label' => 'Año', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '4', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '36', // Código
                'name' => 'Variedad', // Nombre
                'description' => 'Variedad', // Descripción
                'print_label' => 'Var', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '37', // Código
                'name' => 'Capacidad de Envase (Kg)', // Nombre
                'description' => 'Capacidad de Envase (Kg)', // Descripción
                'print_label' => 'Cap.Env.KG', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '38', // Código
                'name' => 'Capacidad (Mb)', // Nombre
                'description' => 'Capacidad (Mb)', // Descripción
                'print_label' => 'Cap.MB', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '39', // Código
                'name' => 'Capacidad de Envase (gr)', // Nombre
                'description' => 'Capacidad de Envase (gr)', // Descripción
                'print_label' => 'Cap.Env.GR', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '40', // Código
                'name' => 'Capacidad de Envase (cl)', // Nombre
                'description' => 'Capacidad de Envase (cl)', // Descripción
                'print_label' => 'Cap.Env.CL', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '41', // Código
                'name' => 'Capacidad de Envase (cc)', // Nombre
                'description' => 'Capacidad de Envase (cc)', // Descripción
                'print_label' => 'Cap.Env.CC', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '42', // Código
                'name' => 'Capacidad de Envase (ml)', // Nombre
                'description' => 'Capacidad de Envase (ml)', // Descripción
                'print_label' => 'Cap.Env.ML', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '43', // Código
                'name' => 'Capacidad de Envase (N° de Unidades)', // Nombre
                'description' => 'Capacidad de Envase (N° de Unidades)', // Descripción
                'print_label' => 'Cap.Env.UN', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '44', // Código
                'name' => 'Capacidad de Envase (N° de Cigarrillos)', // Nombre
                'description' => 'Capacidad de Envase (N° de Cigarrillos)', // Descripción
                'print_label' => 'Cap.Env.CIG', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '45', // Código
                'name' => 'Tipo de Software', // Nombre
                'description' => 'Tipo de Software', // Descripción
                'print_label' => 'T.Soft', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '46', // Código
                'name' => 'Nombre de Software', // Nombre
                'description' => 'Nombre de Software', // Descripción
                'print_label' => 'Software', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '47', // Código
                'name' => 'Marca de Software', // Nombre
                'description' => 'Marca de Software', // Descripción
                'print_label' => 'Marca.Soft', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '48', // Código
                'name' => 'Numeración (Francesa)', // Nombre
                'description' => 'Numeración (Francesa)', // Descripción
                'print_label' => 'Num.Francesa', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '49', // Código
                'name' => 'Marca del Vehículo', // Nombre
                'description' => 'Marca del Vehículo', // Descripción
                'print_label' => 'Marca.Vhc', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '04', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '50', // Código
                'name' => 'Tipo de Combustible', // Nombre
                'description' => 'Tipo de Combustible', // Descripción
                'print_label' => 'Combustible', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '07', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '51', // Código
                'name' => 'Vehículo de destino', // Nombre
                'description' => 'Vehículo de destino', // Descripción
                'print_label' => 'Vehi.Destino', // Etiqueta Impresión
                'data_type_code' => 'LISTA', // Tipo de Dato Código
                'value_list_code' => '01', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '52', // Código
                'name' => 'Carga Máxima Kgs.', // Nombre
                'description' => 'Carga Máxima en Kgs.', // Descripción
                'print_label' => 'Carg.Max.Kgs', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '53', // Código
                'name' => 'Carga Máxima Ton.', // Nombre
                'description' => 'Carga Máxima en Toneladas', // Descripción
                'print_label' => 'Carg.Max.Ton', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '54', // Código
                'name' => 'Colores', // Nombre
                'description' => 'Colores', // Descripción
                'print_label' => 'Colores', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '55', // Código
                'name' => 'Peso Total Kgs.', // Nombre
                'description' => 'Peso Total en Kgs.', // Descripción
                'print_label' => 'Peso.Tot.Kgs', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '56', // Código
                'name' => 'Peso Total Ton.', // Nombre
                'description' => 'Peso Total en Toneladas', // Descripción
                'print_label' => 'Peso.Tot.Ton', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '6', // Enteros
                'decimals' => '2', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '57', // Código
                'name' => 'Puertas', // Nombre
                'description' => 'Cantidad Puertas', // Descripción
                'print_label' => 'Puertas', // Etiqueta Impresión
                'data_type_code' => 'NUME', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '2', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::VIGENTE, // Vigencia
            ],
            [
                'code' => '58', // Código
                'name' => 'Tracción Migrada', // Nombre
                'description' => 'Sistema de Tracción Migrada desde SVR', // Descripción
                'print_label' => 'Tracción', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
            [
                'code' => '59', // Código
                'name' => 'Tipo de Item Migrado', // Nombre
                'description' => 'Tipo de Item Migrado desde SVR', // Descripción
                'print_label' => 'T.Item', // Etiqueta Impresión
                'data_type_code' => 'ALFANUM', // Tipo de Dato Código
                'value_list_code' => '', // Lista de Valor Código
                'integers' => '0', // Enteros
                'decimals' => '0', // Decimales
                'is_required' => '', // Obligatoriedad
                'is_active' => VigenciaEnum::NO_VIGENTE, // Vigencia
            ],
        ];

        Parametros\ZofriDescriptores::insert($data);
    }
}
