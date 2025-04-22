<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\VigenciaEnum;

/**
 * Migración combinada para todas las tablas de parámetros Zofri.
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Aduanas
        Schema::create('zofri_aduanas', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10)->nullable(); // Código de la Aduana
            $table->string('name', 50)->nullable(); // Nombre de la Aduana
            $table->string('is_active', 1)->default(VigenciaEnum::VIGENTE->value); // Vigencia de la Aduana
        });

        // Aranceles De Vehiculos
        Schema::create('zofri_aranceles_de_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
        });

        // Avanzadas Aduaneras
        Schema::create('zofri_avanzadas_aduaneras', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10)->nullable(); // Código de la Avanzada
            $table->string('name', 50)->nullable(); // Nombre de la Avanzada
            $table->string('description', 200)->nullable(); // Descripción de la Avanzada
            $table->string('customs_code', 10)->nullable(); // Código de la Aduana a la cual pertenece la Avanzada Aduanera
            $table->string('is_active', 1)->default(VigenciaEnum::VIGENTE->value); // Vigencia de la Avanzada
        });

        // Codigos Arancelarios
        Schema::create('zofri_codigos_arancelarios', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('measure_unit_code')->nullable(); // Unidad de Medida Código
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Condiciones De Venta
        Schema::create('zofri_condiciones_de_venta', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Descriptores
        Schema::create('zofri_descriptores', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('print_label')->nullable(); // Etiqueta Impresión
            $table->string('data_type_code')->nullable(); // Tipo de Dato Código
            $table->string('value_list_code')->nullable(); // Lista de Valor Código
            $table->string('integers')->nullable(); // Enteros
            $table->string('decimals')->nullable(); // Decimales
            $table->string('is_required')->nullable(); // Obligatoriedad
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Descriptores Por Arancel
        Schema::create('zofri_descriptores_por_arancel', function (Blueprint $table) {
            $table->id();
            $table->string('tariff_code')->nullable(); // Código Arancelario
            $table->string('descriptor_code')->nullable(); // Descriptor Código
        });

        // Destinos
        Schema::create('zofri_destinos', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Estados Documentos
        Schema::create('zofri_estados_documentos', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Formatos De Archivo
        Schema::create('zofri_formatos_de_archivo', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
        });

        // Listas De Valores
        Schema::create('zofri_listas_de_valores', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Localidades
        Schema::create('zofri_localidades', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('customs_code')->nullable(); // Aduana Código
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Medios De Transporte
        Schema::create('zofri_medios_de_transporte', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Monedas
        Schema::create('zofri_monedas', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('symbol')->nullable(); // Símbolo
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Organismos Externos
        Schema::create('zofri_organismos_externos', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Paises
        Schema::create('zofri_paises', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Procedencias
        Schema::create('zofri_procedencias', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Puertos De Embarque
        Schema::create('zofri_puertos_de_embarque', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Regiones
        Schema::create('zofri_regiones', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
        });

        // Tipos De Adjunto
        Schema::create('zofri_tipos_de_adjunto', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
        });

        // Tipos De Bulto
        Schema::create('zofri_tipos_de_bulto', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Tipos De Certificado
        Schema::create('zofri_tipos_de_certificado', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
        });

        // Tipos De Clausula
        Schema::create('zofri_tipos_de_clausula', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
        });

        // Tipos De Contenedor
        Schema::create('zofri_tipos_de_contenedor', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
        });

        // Tipos De Dato Descriptor
        Schema::create('zofri_tipos_de_dato_descriptor', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
        });

        // Tipos De Documento
        Schema::create('zofri_tipos_de_documento', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Tipos De Inventario
        Schema::create('zofri_tipos_de_inventario', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Tipos De Garantia
        Schema::create('zofri_tipos_de_garantia', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Tipos De Resolucion Aduanera
        Schema::create('zofri_tipos_de_resolucion_aduanera', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
        });

        // Tipos De Tramite
        Schema::create('zofri_tipos_de_tramite', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Unidades De Medida
        Schema::create('zofri_unidades_de_medida', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código de la Unidad de Medida
            $table->string('name', 50)->nullable(); // Nombre de la Unidad de Medida
            $table->string('description', 200)->nullable(); // Descripción de la Unidad de Medida
            $table->string('acronym', 10)->nullable(); // Sigla de la Unidad de Medida
            $table->string('is_active', 1)->default(VigenciaEnum::VIGENTE->value); // Vigencia de la Unidad de Medida (S o N)
        });

        // Valores De Listas De Valor
        Schema::create('zofri_valores_de_listas_de_valor', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('value_list_code')->nullable(); // Lista de Valor Código
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Vias De Ingreso
        Schema::create('zofri_vias_de_ingreso', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
        });

        // Zonas De Exportacion
        Schema::create('zofri_zonas_de_exportacion', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Zonas Francas
        Schema::create('zofri_zonas_francas', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });

        // Zonas Francas De Extension
        Schema::create('zofri_zonas_francas_de_extension', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable(); // Código
            $table->string('name')->nullable(); // Nombre
            $table->string('description')->nullable(); // Descripción
            $table->string('is_active')->default(VigenciaEnum::VIGENTE->value); // Vigencia
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zofri_zonas_francas_de_extension');
        Schema::dropIfExists('zofri_zonas_francas');
        Schema::dropIfExists('zofri_zonas_de_exportacion');
        Schema::dropIfExists('zofri_vias_de_ingreso');
        Schema::dropIfExists('zofri_valores_de_listas_de_valor');
        Schema::dropIfExists('zofri_unidades_de_medida');
        Schema::dropIfExists('zofri_tipos_de_tramite');
        Schema::dropIfExists('zofri_tipos_de_resolucion_aduanera');
        Schema::dropIfExists('zofri_tipos_de_garantia');
        Schema::dropIfExists('zofri_tipos_de_inventario');
        Schema::dropIfExists('zofri_tipos_de_documento');
        Schema::dropIfExists('zofri_tipos_de_dato_descriptor');
        Schema::dropIfExists('zofri_tipos_de_contenedor');
        Schema::dropIfExists('zofri_tipos_de_clausula');
        Schema::dropIfExists('zofri_tipos_de_certificado');
        Schema::dropIfExists('zofri_tipos_de_bulto');
        Schema::dropIfExists('zofri_tipos_de_adjunto');
        Schema::dropIfExists('zofri_regiones');
        Schema::dropIfExists('zofri_puertos_de_embarque');
        Schema::dropIfExists('zofri_procedencias');
        Schema::dropIfExists('zofri_paises');
        Schema::dropIfExists('zofri_organismos_externos');
        Schema::dropIfExists('zofri_monedas');
        Schema::dropIfExists('zofri_medios_de_transporte');
        Schema::dropIfExists('zofri_localidades');
        Schema::dropIfExists('zofri_listas_de_valores');
        Schema::dropIfExists('zofri_formatos_de_archivo');
        Schema::dropIfExists('zofri_estados_documentos');
        Schema::dropIfExists('zofri_destinos');
        Schema::dropIfExists('zofri_descriptores_por_arancel');
        Schema::dropIfExists('zofri_descriptores');
        Schema::dropIfExists('zofri_condiciones_de_venta');
        Schema::dropIfExists('zofri_codigos_arancelarios');
        Schema::dropIfExists('zofri_avanzadas_aduaneras');
        Schema::dropIfExists('zofri_aranceles_de_vehiculos');
        Schema::dropIfExists('zofri_aduanas');
    }
};
