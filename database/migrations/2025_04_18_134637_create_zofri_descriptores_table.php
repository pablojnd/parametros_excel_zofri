<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptoresTable extends Migration
{
    public function up(): void
    {
        Schema::create('zofri_descriptores', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('etiqueta_impresion')->nullable();
            $table->string('tipo_de_dato_codigo')->nullable();
            $table->string('lista_de_valor_codigo')->nullable();
            $table->string('enteros')->nullable();
            $table->string('decimales')->nullable();
            $table->string('obligatoriedad')->nullable();
            $table->string('vigencia')->nullable(); // S: Vigente, N: No vigente
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zofri_descriptores');
    }
}
