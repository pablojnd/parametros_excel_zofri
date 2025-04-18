<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArancelesDeVehículosTable extends Migration
{
    public function up(): void
    {
        Schema::create('zofri_aranceles_de_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zofri_aranceles_de_vehiculos');
    }
}
