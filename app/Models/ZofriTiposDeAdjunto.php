<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriTiposDeAdjunto extends Model
{
    use HasFactory;

    protected $table = 'zofri_tipos_de_adjunto';
    
    protected $fillable = [
        'codigo',
        'nombre',
    ];
}
