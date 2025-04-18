<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriPuertosDeEmbarque extends Model
{
    use HasFactory;

    protected $table = 'zofri_puertos_de_embarque';
    
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
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
