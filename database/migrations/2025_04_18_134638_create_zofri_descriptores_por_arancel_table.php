<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptoresPorArancelTable extends Migration
{
    public function up(): void
    {
        Schema::create('zofri_descriptores_por_arancel', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_arancelario')->nullable();
            $table->string('descriptor_codigo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zofri_descriptores_por_arancel');
    }
}
