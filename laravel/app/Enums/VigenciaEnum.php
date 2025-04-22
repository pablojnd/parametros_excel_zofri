<?php

namespace App\Enums;

/**
 * Enum para manejar el estado de vigencia en tablas de parámetros
 */
enum VigenciaEnum: string
{
    case VIGENTE = 'S';    // Registro vigente/activo
    case NO_VIGENTE = 'N'; // Registro no vigente/inactivo
    
    /**
     * Obtiene la etiqueta legible del estado
     */
    public function label(): string
    {
        return match($this) {
            self::VIGENTE => 'Vigente',
            self::NO_VIGENTE => 'No vigente',
        };
    }
    
    /**
     * Verifica si el estado es vigente
     */
    public function isVigente(): bool
    {
        return $this === self::VIGENTE;
    }
}
