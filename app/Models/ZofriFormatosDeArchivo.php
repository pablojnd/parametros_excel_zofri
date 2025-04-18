<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriFormatosDeArchivo extends Model
{
    use HasFactory;

    protected $table = 'zofri_formatos_de_archivo';
    
    protected $fillable = [
        'codigo',
        'nombre',
    ];
}
