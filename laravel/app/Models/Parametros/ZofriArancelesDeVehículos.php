<?php

namespace App\Models\Parametros;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriArancelesDeVehículos extends Model
{
    use HasFactory;

    protected $table = 'zofri_aranceles_de_vehiculos';
    
    // No usar timestamps
    public $timestamps = false;
    
    protected $fillable = [
        'code', // Código
    ];
}
