<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Contenido extends Model
{
    protected $fillable = [
        'clave',
        'seccion',
        'etiqueta',
        'valor',
        'tipo',
    ];

    // ── Scopes ────────────────────────────────────────────

    public function scopeSeccion(Builder $query, string $seccion): Builder
    {
        return $query->where('seccion', $seccion);
    }

    // ── Helpers estáticos ─────────────────────────────────

    /**
     * Obtener un valor por su clave.
     * Uso: Contenido::get('home.hero.titulo', 'Valor por defecto')
     */
    public static function get(string $clave, string $default = ''): string
    {
        return static::where('clave', $clave)->value('valor') ?? $default;
    }

    /**
     * Obtener todos los contenidos de una sección como array clave => valor.
     * Uso: Contenido::seccionArray('home') → ['home.hero.titulo' => '...', ...]
     */
    public static function seccionArray(string $seccion): array
    {
        return static::where('seccion', $seccion)
                     ->pluck('valor', 'clave')
                     ->toArray();
    }

    /** Secciones disponibles */
    public static function secciones(): array
    {
        return [
            'home'        => 'Inicio',
            'nosotros'    => 'Nosotros',
            'contacto'    => 'Contacto',
            'donaciones'  => 'Donaciones',
            'sacramentos' => 'Sacramentos',
            'general'     => 'General (global)',
        ];
    }

    /** Tipos de contenido */
    public static function tipos(): array
    {
        return [
            'texto'    => 'Texto corto',
            'textarea' => 'Texto largo',
            'html'     => 'HTML (editor enriquecido)',
            'imagen'   => 'URL de imagen',
            'json'     => 'JSON (datos estructurados)',
        ];
    }
}
