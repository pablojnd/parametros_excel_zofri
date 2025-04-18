<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriTiposDeClausula extends Model
{
    use HasFactory;

    protected $table = 'zofri_tipos_de_clausula';
    
    protected $fillable = [
        'codigo',
        'nombre',
    ];
}
