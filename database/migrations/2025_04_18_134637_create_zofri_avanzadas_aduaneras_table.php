<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvanzadasAduanerasTable extends Migration
{
    public function up(): void
    {
        Schema::create('zofri_avanzadas_aduaneras', function (Blueprint $table) {
            $table->id();
            $table->string(10)('codigo')->nullable(); // Código de la Avanzada
            $table->string(50)('nombre')->nullable(); // Nombre de la Avanzada
            $table->string(200)('descripcion')->nullable(); // Descripción de la Avanzada
            $table->string(10)('aduana_codigo')->nullable(); // Código de la Aduana a la cual pertenece la Avanzada Aduanera
            $table->char(1)('vigencia')->nullable(); // S: Vigente, N: No vigente
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zofri_avanzadas_aduaneras');
    }
}
