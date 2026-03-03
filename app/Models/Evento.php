<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Evento extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha',
        'hora',
        'ubicacion',
        'activo',
    ];

    protected $casts = [
        'fecha'  => 'date',
        'activo' => 'boolean',
    ];

    // ── Scopes ────────────────────────────────────────────

    public function scopeActivos(Builder $query): Builder
    {
        return $query->where('activo', true);
    }

    public function scopeProximos(Builder $query): Builder
    {
        return $query->where('fecha', '>=', now()->startOfDay())
                     ->orderBy('fecha')
                     ->orderBy('hora');
    }
}
