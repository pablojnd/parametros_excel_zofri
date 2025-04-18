<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriCódigosArancelarios extends Model
{
    use HasFactory;

    protected $table = 'zofri_codigos_arancelarios';
    
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'unidad_de_medida_codigo',
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
