<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriArancelesDeVehículos extends Model
{
    use HasFactory;

    protected $table = 'zofri_aranceles_de_vehiculos';
    
    protected $fillable = [
        'codigo',
    ];
}
