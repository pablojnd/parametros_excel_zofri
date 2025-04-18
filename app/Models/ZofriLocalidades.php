<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriLocalidades extends Model
{
    use HasFactory;

    protected $table = 'zofri_localidades';
    
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'aduana_codigo',
        'vigencia',
    ];

    // Enumeraciones para campo vigencia
    const VIGENTE = 'S';
    const NO_VIGENTE = 'N';

    // Scope para filtrar registros vigentes
    public function scopeVigente($query)
    {
        return $query->where('vigencia', self::VIGENTE);
    }
}
