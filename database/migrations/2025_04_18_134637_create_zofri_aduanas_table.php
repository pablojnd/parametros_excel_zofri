<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAduanasTable extends Migration
{
    public function up(): void
    {
        Schema::create('zofri_aduanas', function (Blueprint $table) {
            $table->id();
            $table->string(10)('codigo')->nullable(); // Código de la Aduana
            $table->string(50)('nombre')->nullable(); // Nombre de la Aduana
            $table->char(1)('vigencia')->nullable(); // S: Vigente, N: No vigente
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zofri_aduanas');
    }
}
