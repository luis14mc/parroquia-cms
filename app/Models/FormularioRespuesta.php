<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormularioRespuesta extends Model
{
    protected $table = 'formulario_respuestas';

    protected $fillable = [
        'formulario_id',
        'datos',
    ];

    protected $casts = [
        'datos' => 'array',
    ];

    // ── Relaciones ────────────────────────────────────────

    public function formulario(): BelongsTo
    {
        return $this->belongsTo(Formulario::class);
    }
}
