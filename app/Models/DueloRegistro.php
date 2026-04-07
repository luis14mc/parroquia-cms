<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DueloRegistro extends Model
{
    /** Siempre la conexión por defecto explícita (evita ambigüedad con cachés o tests). */
    protected $connection = 'mysql';

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
