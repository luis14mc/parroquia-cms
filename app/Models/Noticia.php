<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'slug',
        'extracto',
        'cuerpo',
        'imagen_destacada',
        'categoria',
        'destacada',
        'fecha_publicacion',
        'publicada',
        'author_id',
    ];

    protected $casts = [
        'destacada' => 'boolean',
        'publicada' => 'boolean',
        'fecha_publicacion' => 'date',
    ];

    // ── Relaciones ────────────────────────────────────────

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // ── Scopes ────────────────────────────────────────────

    /** Solo noticias visibles en el frontend */
    public function scopePublicadas(Builder $query): Builder
    {
        return $query->where('publicada', true)
                     ->whereNotNull('fecha_publicacion')
                     ->where('fecha_publicacion', '<=', now());
    }

    /** La noticia marcada como destacada (para el hero) */
    public function scopeDestacada(Builder $query): Builder
    {
        return $query->where('destacada', true);
    }

    /** Filtrar por categoría */
    public function scopeCategoria(Builder $query, string $categoria): Builder
    {
        return $query->where('categoria', $categoria);
    }

    // ── Accessors / Mutators ──────────────────────────────

    /** Auto-generar slug desde el título */
    protected static function booted(): void
    {
        static::creating(function (Noticia $noticia) {
            if (empty($noticia->slug)) {
                $noticia->slug = Str::slug($noticia->titulo);
            }
        });
    }

    /** Categorías disponibles */
    public static function categorias(): array
    {
        return [
            'comunidad'     => 'Comunidad',
            'liturgia'      => 'Liturgia',
            'juventud'      => 'Juventud',
            'voluntariado'  => 'Voluntariado',
            'reflexion'     => 'Reflexión',
        ];
    }
}
