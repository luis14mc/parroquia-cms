<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Formulario público configurable desde Filament (/admin).
 *
 * @property array<int, array{key: string, label: string, type: string, required?: bool, max?: int}> $fields
 */
class SiteForm extends Model
{
    /** @use HasFactory<\Database\Factories\SiteFormFactory> */
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'page_title',
        'page_subtitle',
        'badge_label',
        'is_enabled',
        'fields',
        'thank_you_heading',
        'thank_you_body',
    ];

    protected function casts(): array
    {
        return [
            'is_enabled' => 'boolean',
            'fields' => 'array',
        ];
    }

    public function submissions(): HasMany
    {
        return $this->hasMany(SiteFormSubmission::class);
    }

    public function scopeEnabled($query)
    {
        return $query->where('is_enabled', true);
    }
}
