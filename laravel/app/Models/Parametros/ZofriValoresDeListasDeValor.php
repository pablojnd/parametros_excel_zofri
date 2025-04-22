<?php

namespace App\Models\Parametros;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\VigenciaEnum;

class ZofriValoresDeListasDeValor extends Model
{
    use HasFactory;

    protected $table = 'zofri_valores_de_listas_de_valor';
    
    // No usar timestamps
    public $timestamps = false;
    
    protected $casts = [
        'is_active' => VigenciaEnum::class, // Campo de vigencia
    ];

    protected $fillable = [
        'code', // Código
        'name', // Nombre
        'description', // Descripción
        'value_list_code', // Lista de Valor Código
        'is_active', // Vigencia
    ];

    // Scope para filtrar registros vigentes
    public function scopeActive($query)
    {
        return $query->where('is_active', VigenciaEnum::VIGENTE);
    }

    // Método de compatibilidad con el nombre anterior
    public function scopeVigente($query)
    {
        return $this->scopeActive($query);
    }
}
