<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\SiteForm;
use App\Models\SiteFormSubmission;
use Illuminate\Database\Seeder;

/**
 * Datos de prueba para QA contra cualquier MySQL (incl. Railway cuando tu `.env` apunta allí).
 *
 * Ejecutar solo cuando quieras volcar datos demo en esa BD:
 *
 *   php artisan db:seed --class=RailwayTestSeeder
 *
 * En APP_ENV=production también define SEED_TEST_DATA=true (variable en Railway) para permitir la corrida.
 */
final class RailwayTestSeeder extends Seeder
{
    public function run(): void
    {
        if ($this->mustAbortProductionWithoutFlag()) {
            return;
        }

        $connection = config('database.default');
        $database = (string) config("database.connections.{$connection}.database");
        $this->command->info("Conexión actual: [{$connection}] → {$database}");

        $form = SiteForm::query()->updateOrCreate(
            ['slug' => 'demo-seed-prueba'],
            [
                'name' => '[QA] Demo seed Railway',
                'page_title' => 'Formulario de prueba (seed)',
                'page_subtitle' => 'Generado por RailwayTestSeeder para validar el CMS en Railway.',
                'badge_label' => 'QA',
                'is_enabled' => true,
                'fields' => [
                    ['key' => 'nombre', 'label' => 'Nombre', 'type' => 'text', 'required' => true, 'max' => 120],
                    ['key' => 'email', 'label' => 'Correo', 'type' => 'email', 'required' => true, 'max' => 255],
                    ['key' => 'mensaje', 'label' => 'Mensaje', 'type' => 'textarea', 'required' => false, 'max' => 2000],
                ],
                'thank_you_heading' => 'Gracias (demo)',
                'thank_you_body' => 'Este envío es solo de prueba desde RailwayTestSeeder.',
            ]
        );

        SiteFormSubmission::query()->where('site_form_id', $form->id)->delete();

        for ($i = 0; $i < 3; $i++) {
            SiteFormSubmission::query()->create([
                'site_form_id' => $form->id,
                'payload' => [
                    'nombre' => fake()->name(),
                    'email' => fake()->safeEmail(),
                    'mensaje' => '[Seed QA #'.($i + 1).'] '.fake()->sentence(),
                ],
                'ip_address' => fake()->ipv4(),
            ]);
        }

        $this->command->info('Listo: formulario slug «demo-seed-prueba» + 3 envíos demo (envíos anteriores de ese formulario fueron sustituidos).');
    }

    private function mustAbortProductionWithoutFlag(): bool
    {
        if (! app()->environment('production')) {
            return false;
        }

        if (filter_var(env('SEED_TEST_DATA'), FILTER_VALIDATE_BOOLEAN)) {
            return false;
        }

        $this->command->warn('En producción hay que definir SEED_TEST_DATA=true (una vez) para ejecutar este seeder.');

        return true;
    }
}
