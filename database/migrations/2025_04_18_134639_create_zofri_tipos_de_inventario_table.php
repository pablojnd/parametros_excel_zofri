<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposDeInventarioTable extends Migration
{
    public function up(): void
    {
        Schema::create('zofri_tipos_de_inventario', function (Blueprint $table) {
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
        Schema::dropIfExists('zofri_tipos_de_inventario');
    }
}
