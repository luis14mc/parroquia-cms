<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Intencion extends Model
{
    use HasFactory;

    protected $table = 'intenciones';

    protected $fillable = [
        'tipo',
        'nombre_completo',
        'telefono',
        'intencion',
        'fecha_deseada',
        'mensaje',
        'estado',
    ];

    protected $casts = [
        'fecha_deseada' => 'date',
    ];

    // ── Scopes ────────────────────────────────────────────

    public function scopePendientes(Builder $query): Builder
    {
        return $query->where('estado', 'pendiente');
    }

    public function scopeProximas(Builder $query): Builder
    {
        return $query->where('fecha_deseada', '>=', now()->startOfDay())
                     ->orderBy('fecha_deseada');
    }

    // ── Helpers ───────────────────────────────────────────

    /** Tipos disponibles (coinciden con el frontend) */
    public static function tipos(): array
    {
        return [
            'salud'           => 'Salud',
            'difuntos'        => 'Difuntos',
            'accion_gracias'  => 'Acción de Gracias',
        ];
    }

    /** Estados disponibles */
    public static function estados(): array
    {
        return [
            'pendiente' => 'Pendiente',
            'leida'     => 'Leída',
            'incluida'  => 'Incluida en Misa',
        ];
    }
}
