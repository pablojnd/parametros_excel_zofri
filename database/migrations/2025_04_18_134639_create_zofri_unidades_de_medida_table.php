<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesDeMedidaTable extends Migration
{
    public function up(): void
    {
        Schema::create('zofri_unidades_de_medida', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable(); // Código de la Unidad de Medida
            $table->string(50)('nombre')->nullable(); // Nombre de la Unidad de Medida
            $table->string(200)('descripcion')->nullable(); // Descripción de la Unidad de Medida
            $table->string(10)('sigla')->nullable(); // Sigla de la Unidad de Medida
            $table->char(1)('vigencia')->nullable(); // S: Vigente, N: No vigente
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zofri_unidades_de_medida');
    }
}
