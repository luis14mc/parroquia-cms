<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Pastoral extends Model
{
    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'imagen',
        'orden',
        'es_activa',
    ];

    protected function casts(): array
    {
        return [
            'orden' => 'integer',
            'es_activa' => 'boolean',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeActivas(Builder $query): Builder
    {
        return $query->where('es_activa', true)->orderBy('orden');
    }
}
