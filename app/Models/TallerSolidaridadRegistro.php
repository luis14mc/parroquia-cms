<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TallerSolidaridadRegistro extends Model
{
    protected $table = 'taller_solidaridad_registros';

    protected $fillable = [
        'site_form_submission_id',
        'nombre_completo',
        'telefono',
        'email',
        'sector_parroquial',
    ];

    public function siteFormSubmission(): BelongsTo
    {
        return $this->belongsTo(SiteFormSubmission::class);
    }

    /**
     * @param  array<string, mixed>  $validated  Payload validado del formulario público (claves definidas en Filament).
     */
    public static function createFromValidatedSubmission(SiteFormSubmission $submission, array $validated): self
    {
        return self::query()->create([
            'site_form_submission_id' => $submission->id,
            'nombre_completo' => (string) $validated['nombre_completo'],
            'telefono' => (string) $validated['telefono'],
            'email' => (string) $validated['email'],
            'sector_parroquial' => (string) $validated['sector_parroquial'],
        ]);
    }
}
