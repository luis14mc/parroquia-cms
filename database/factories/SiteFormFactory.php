<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\SiteForm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SiteForm>
 */
final class SiteFormFactory extends Factory
{
    protected $model = SiteForm::class;

    public function definition(): array
    {
        return [
            'slug' => fake()->unique()->slug(3),
            'name' => fake()->sentence(4),
            'page_title' => fake()->sentence(5),
            'page_subtitle' => fake()->sentence(),
            'badge_label' => null,
            'is_enabled' => true,
            'fields' => [
                ['key' => 'nombre', 'label' => 'Nombre', 'type' => 'text', 'required' => true, 'max' => 255],
                ['key' => 'email', 'label' => 'Correo', 'type' => 'email', 'required' => true, 'max' => 255],
            ],
            'thank_you_heading' => null,
            'thank_you_body' => null,
        ];
    }

    public function disabled(): static
    {
        return $this->state(fn (array $attributes): array => [
            'is_enabled' => false,
        ]);
    }
}
