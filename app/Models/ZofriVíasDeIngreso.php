<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriVíasDeIngreso extends Model
{
    use HasFactory;

    protected $table = 'zofri_vias_de_ingreso';
    
    protected $fillable = [
        'codigo',
        'nombre',
    ];
}
