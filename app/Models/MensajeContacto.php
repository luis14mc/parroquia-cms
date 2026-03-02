<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class MensajeContacto extends Model
{
    protected $table = 'mensajes_contacto';

    protected $fillable = [
        'nombre_completo',
        'email',
        'asunto',
        'mensaje',
        'estado',
    ];

    /* ── Scopes ──────────────────────────────── */

    public function scopeNuevos(Builder $query): Builder
    {
        return $query->where('estado', 'nuevo');
    }

    /* ── Helpers ─────────────────────────────── */

    public static function estados(): array
    {
        return [
            'nuevo'      => 'Nuevo',
            'leido'      => 'Leído',
            'respondido' => 'Respondido',
        ];
    }
}
