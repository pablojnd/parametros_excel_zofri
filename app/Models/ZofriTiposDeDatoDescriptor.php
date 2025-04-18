<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriTiposDeDatoDescriptor extends Model
{
    use HasFactory;

    protected $table = 'zofri_tipos_de_dato_descriptor';
    
    protected $fillable = [
        'codigo',
        'nombre',
    ];
}
