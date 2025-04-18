<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListasDeValoresTable extends Migration
{
    public function up(): void
    {
        Schema::create('zofri_listas_de_valores', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('vigencia')->nullable(); // S: Vigente, N: No vigente
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zofri_listas_de_valores');
    }
}
