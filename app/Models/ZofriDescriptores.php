<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZofriDescriptores extends Model
{
    use HasFactory;

    protected $table = 'zofri_descriptores';
    
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'etiqueta_impresion',
        'tipo_de_dato_codigo',
        'lista_de_valor_codigo',
        'enteros',
        'decimales',
        'obligatoriedad',
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
