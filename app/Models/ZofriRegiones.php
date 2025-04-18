<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriRegiones extends Model
{
    use HasFactory;

    protected $table = 'zofri_regiones';
    
    protected $fillable = [
        'codigo',
        'nombre',
    ];
}
