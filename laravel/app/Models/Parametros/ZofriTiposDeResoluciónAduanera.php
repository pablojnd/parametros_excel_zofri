<?php

namespace App\Models\Parametros;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriTiposDeResoluciónAduanera extends Model
{
    use HasFactory;

    protected $table = 'zofri_tipos_de_resolucion_aduanera';
    
    // No usar timestamps
    public $timestamps = false;
    
    protected $fillable = [
        'code', // Código
        'name', // Nombre
    ];
}
