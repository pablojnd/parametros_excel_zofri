<?php

namespace App\Models\Parametros;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriVíasDeIngreso extends Model
{
    use HasFactory;

    protected $table = 'zofri_vias_de_ingreso';
    
    // No usar timestamps
    public $timestamps = false;
    
    protected $fillable = [
        'code', // Código
        'name', // Nombre
    ];
}
