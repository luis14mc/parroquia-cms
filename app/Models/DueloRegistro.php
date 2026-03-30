<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DueloRegistro extends Model
{
    protected $table = 'duelo_registros';

    protected $fillable = [
        'nombre_completo',
        'telefono',
        'email',
        'dias_asistencia',
    ];

    protected $casts = [
        'dias_asistencia' => 'array',
    ];
}
