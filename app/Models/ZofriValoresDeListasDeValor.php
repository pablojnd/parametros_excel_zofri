<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriValoresDeListasDeValor extends Model
{
    use HasFactory;

    protected $table = 'zofri_valores_de_listas_de_valor';
    
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'lista_de_valor_codigo',
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
