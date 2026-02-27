<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Evento extends Model
{
    protected $fillable = [
        'titulo',
        'slug',
        'descripcion',
        'ubicacion',
        'inicio_en',
        'fin_en',
        'imagen',
        'es_publicado',
    ];

    protected function casts(): array
    {
        return [
            'inicio_en' => 'datetime',
            'fin_en' => 'datetime',
            'es_publicado' => 'boolean',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopePublicados(Builder $query): Builder
    {
        return $query->where('es_publicado', true);
    }

    public function scopeProximos(Builder $query): Builder
    {
        return $query->where('inicio_en', '>=', now());
    }
}
