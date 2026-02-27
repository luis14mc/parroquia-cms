<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Noticia extends Model
{
    protected $fillable = [
        'titulo',
        'slug',
        'contenido',
        'resumen',
        'imagen',
        'publicado_en',
        'es_publicada',
    ];

    protected function casts(): array
    {
        return [
            'publicado_en' => 'datetime',
            'es_publicada' => 'boolean',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopePublicadas(Builder $query): Builder
    {
        return $query->where('es_publicada', true)
            ->where(function (Builder $q) {
                $q->whereNull('publicado_en')
                    ->orWhere('publicado_en', '<=', now());
            });
    }
}
