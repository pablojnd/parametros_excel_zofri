<?php

namespace App\Models\Parametros;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriDescriptoresPorArancel extends Model
{
    use HasFactory;

    protected $table = 'zofri_descriptores_por_arancel';
    
    // No usar timestamps
    public $timestamps = false;
    
    protected $fillable = [
        'tariff_code', // Código Arancelario
        'descriptor_code', // Descriptor Código
    ];
}
