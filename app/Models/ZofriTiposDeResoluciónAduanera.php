<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriTiposDeResoluciónAduanera extends Model
{
    use HasFactory;

    protected $table = 'zofri_tipos_de_resolucion_aduanera';
    
    protected $fillable = [
        'codigo',
        'nombre',
    ];
}
