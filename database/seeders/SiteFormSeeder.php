<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\SiteForm;
use Illuminate\Database\Seeder;

class SiteFormSeeder extends Seeder
{
    public function run(): void
    {
        SiteForm::query()->updateOrCreate(
            ['slug' => 'taller-solidaridad'],
            [
                'name' => 'Taller de la Solidaridad',
                'page_title' => 'Taller de la Solidaridad',
                'page_subtitle' => 'Completa el formulario para confirmar tu participación. Nos pondremos en contacto contigo.',
                'badge_label' => 'Pastoral social',
                'is_enabled' => true,
                'fields' => [
                    ['key' => 'nombre_completo', 'label' => 'Nombre completo', 'type' => 'text', 'required' => true, 'max' => 255],
                    ['key' => 'telefono', 'label' => 'Teléfono', 'type' => 'tel', 'required' => true, 'max' => 32],
                    ['key' => 'email', 'label' => 'Correo electrónico', 'type' => 'email', 'required' => true, 'max' => 255],
                    ['key' => 'sector_parroquial', 'label' => 'Sector parroquial', 'type' => 'text', 'required' => true, 'max' => 255],
                ],
                'thank_you_body' => 'Hemos recibido tu inscripción. Te contactaremos pronto con más detalles.',
            ]
        );
    }
}
