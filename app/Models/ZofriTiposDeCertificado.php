<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriTiposDeCertificado extends Model
{
    use HasFactory;

    protected $table = 'zofri_tipos_de_certificado';
    
    protected $fillable = [
        'codigo',
        'nombre',
    ];
}
