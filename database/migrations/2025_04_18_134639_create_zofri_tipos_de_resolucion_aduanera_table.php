<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposDeResoluciónAduaneraTable extends Migration
{
    public function up(): void
    {
        Schema::create('zofri_tipos_de_resolucion_aduanera', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->string('nombre')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zofri_tipos_de_resolucion_aduanera');
    }
}
