<?php

namespace App\Models\Parametros;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\VigenciaEnum;

class ZofriUnidadesDeMedida extends Model
{
    use HasFactory;

    protected $table = 'zofri_unidades_de_medida';
    
    // No usar timestamps
    public $timestamps = false;
    
    protected $casts = [
        'is_active' => VigenciaEnum::class, // Campo de vigencia
    ];

    protected $fillable = [
        'code', // Código
        'name', // Nombre
        'description', // Descripción
        'acronym', // Sigla
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
