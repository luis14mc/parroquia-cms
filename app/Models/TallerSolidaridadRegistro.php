<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TallerSolidaridadRegistro extends Model
{
    protected $table = 'taller_solidaridad_registros';

    protected $fillable = [
        'nombre_completo',
        'telefono',
        'email',
        'sector_parroquial',
    ];
}
