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
        'confirmar_asistencia',
    ];

    protected $casts = [
        'confirmar_asistencia' => 'boolean',
    ];
}
