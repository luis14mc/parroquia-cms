<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Intencion extends Model
{
    protected $table = 'intencions';

    protected $fillable = [
        'tipo',
        'nombre_beneficiario',
        'solicitante',
        'fecha_misa',
        'comentario',
        'es_publicada',
    ];

    protected function casts(): array
    {
        return [
            'fecha_misa' => 'date',
            'es_publicada' => 'boolean',
        ];
    }

    public function scopePublicadas(Builder $query): Builder
    {
        return $query->where('es_publicada', true);
    }

    public const TIPOS = ['difunto', 'enfermo', 'gratitud', 'otro'];
}
