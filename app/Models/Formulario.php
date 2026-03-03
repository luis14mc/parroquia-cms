<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Formulario extends Model
{
    protected $fillable = [
        'titulo',
        'slug',
        'descripcion',
        'campos',
        'activo',
        'mostrar_en_home',
        'fecha_inicio',
        'fecha_fin',
    ];

    protected $casts = [
        'campos'          => 'array',
        'activo'          => 'boolean',
        'mostrar_en_home' => 'boolean',
        'fecha_inicio'    => 'date',
        'fecha_fin'       => 'date',
    ];

    // ── Relaciones ────────────────────────────────────────

    public function respuestas(): HasMany
    {
        return $this->hasMany(FormularioRespuesta::class);
    }

    // ── Scopes ────────────────────────────────────────────

    public function scopeActivos(Builder $query): Builder
    {
        return $query->where('activo', true);
    }

    public function scopeVisiblesEnHome(Builder $query): Builder
    {
        return $query->where('activo', true)
                     ->where('mostrar_en_home', true)
                     ->where(function ($q) {
                         $q->whereNull('fecha_inicio')->orWhere('fecha_inicio', '<=', now());
                     })
                     ->where(function ($q) {
                         $q->whereNull('fecha_fin')->orWhere('fecha_fin', '>=', now());
                     });
    }

    // ── Helpers ───────────────────────────────────────────

    /** Tipos de campo disponibles para el builder */
    public static function tiposCampo(): array
    {
        return [
            'texto'    => 'Texto corto',
            'textarea' => 'Texto largo',
            'email'    => 'Correo electrónico',
            'telefono' => 'Teléfono',
            'numero'   => 'Número',
            'fecha'    => 'Fecha',
            'select'   => 'Selección (dropdown)',
            'checkbox' => 'Casilla de verificación',
        ];
    }

    /** Auto-generar slug */
    protected static function booted(): void
    {
        static::creating(function (Formulario $formulario) {
            if (empty($formulario->slug)) {
                $formulario->slug = Str::slug($formulario->titulo);
            }
        });
    }
}
