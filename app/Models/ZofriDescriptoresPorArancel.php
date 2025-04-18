<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriDescriptoresPorArancel extends Model
{
    use HasFactory;

    protected $table = 'zofri_descriptores_por_arancel';
    
    protected $fillable = [
        'codigo_arancelario',
        'descriptor_codigo',
    ];
}
