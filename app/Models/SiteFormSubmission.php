<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SiteFormSubmission extends Model
{
    protected $fillable = [
        'site_form_id',
        'payload',
        'ip_address',
    ];

    protected function casts(): array
    {
        return [
            'payload' => 'array',
        ];
    }

    public function siteForm(): BelongsTo
    {
        return $this->belongsTo(SiteForm::class);
    }

    public function tallerSolidaridadRegistro(): HasOne
    {
        return $this->hasOne(TallerSolidaridadRegistro::class);
    }
}
