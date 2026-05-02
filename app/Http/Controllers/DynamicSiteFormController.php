<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\SiteForm;
use App\Models\SiteFormSubmission;
use App\Models\TallerSolidaridadRegistro;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class DynamicSiteFormController extends Controller
{
    public function show(string $slug)
    {
        $form = SiteForm::query()->where('slug', $slug)->firstOrFail();

        if (! $form->is_enabled) {
            abort(404);
        }

        return view('forms.show', [
            'form' => $form,
        ]);
    }

    public function thanks(string $slug)
    {
        $form = SiteForm::query()->where('slug', $slug)->firstOrFail();

        if (! $form->is_enabled) {
            abort(404);
        }

        return view('forms.thanks', [
            'form' => $form,
        ]);
    }

    public function store(Request $request, string $slug)
    {
        $form = SiteForm::query()->where('slug', $slug)->firstOrFail();

        if (! $form->is_enabled) {
            abort(403, 'Este formulario no está disponible.');
        }

        $driver = config('database.connections.'.config('database.default').'.driver');
        if (($driver === 'mysql' || $driver === 'mariadb') && ! extension_loaded('pdo_mysql')) {
            return back()
                ->withInput()
                ->withErrors([
                    'db' => 'El servidor no puede guardar en MySQL (falta extensión pdo_mysql).',
                ]);
        }

        try {
            $rules = $this->buildValidationRules($form->fields ?? []);
            $validated = $request->validate($rules);

            if ($slug === 'taller-solidaridad') {
                $this->assertTallerSolidaridadPayloadKeys($validated);
            }

            DB::transaction(function () use ($form, $slug, $validated, $request): void {
                $submission = SiteFormSubmission::query()->create([
                    'site_form_id' => $form->id,
                    'payload' => $validated,
                    'ip_address' => $request->ip(),
                ]);

                if ($slug === 'taller-solidaridad') {
                    TallerSolidaridadRegistro::createFromValidatedSubmission($submission, $validated);
                }
            });

            $firstKey = array_key_first($validated);
            $displayName = $firstKey !== null ? (string) ($validated[$firstKey] ?? '') : '';

            return redirect()
                ->route('forms.thanks', ['slug' => $slug])
                ->with([
                    'submitted_display' => $displayName,
                ]);
        } catch (ValidationException $e) {
            throw $e;
        } catch (QueryException $e) {
            Log::error('dynamic form: error SQL', [
                'slug' => $slug,
                'message' => $e->getMessage(),
            ]);

            return back()->withInput()->withErrors([
                'db' => 'No se pudo guardar la inscripción. Intente de nuevo o contacte a la parroquia.',
            ]);
        }
    }

    /**
     * @param  array<int, array<string, mixed>>  $fields
     * @return array<string, string|array<int, string|ValidationRule>>
     */
    private function buildValidationRules(array $fields): array
    {
        $rules = [];

        foreach ($fields as $field) {
            $key = isset($field['key']) ? (string) $field['key'] : '';
            if ($key === '' || preg_match('/[^a-z0-9_]/', $key)) {
                continue;
            }

            $parts = [];

            $required = filter_var($field['required'] ?? false, FILTER_VALIDATE_BOOLEAN);
            $parts[] = $required ? 'required' : 'nullable';

            $type = $field['type'] ?? 'text';
            $parts[] = match ($type) {
                'email' => 'email:rfc',
                'tel', 'textarea', 'text' => 'string',
                default => 'string',
            };

            $max = max(1, min(65535, (int) ($field['max'] ?? 255)));
            $parts[] = 'max:'.$max;

            $rules[$key] = $parts;
        }

        if ($rules === []) {
            abort(500, 'El formulario no tiene campos válidos configurados.');
        }

        return $rules;
    }

    /**
     * @param  array<string, mixed>  $validated
     */
    private function assertTallerSolidaridadPayloadKeys(array $validated): void
    {
        $required = ['nombre_completo', 'telefono', 'email', 'sector_parroquial'];

        foreach ($required as $key) {
            if (! array_key_exists($key, $validated)) {
                throw ValidationException::withMessages([
                    'form' => 'El formulario del taller debe incluir los campos: nombre completo, teléfono, correo y sector parroquial (revísalo en el CMS).',
                ]);
            }
        }
    }
}
