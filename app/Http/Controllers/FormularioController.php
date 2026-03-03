<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Formulario;
use App\Models\FormularioRespuesta;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Controller for public-facing dynamic forms.
 */
final class FormularioController extends Controller
{
    /**
     * Display a dynamic form by slug.
     */
    public function show(string $slug): View
    {
        $formulario = Formulario::activos()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('formulario', [
            'formulario' => $formulario,
        ]);
    }

    /**
     * Store a dynamic form response.
     */
    public function store(string $slug, Request $request): RedirectResponse
    {
        $formulario = Formulario::activos()
            ->where('slug', $slug)
            ->firstOrFail();

        // Build validation rules dynamically from the form fields
        $rules = [];
        $campos = $formulario->campos ?? [];

        foreach ($campos as $campo) {
            $nombre = $campo['nombre'];
            $fieldRules = [];

            if (!empty($campo['requerido'])) {
                $fieldRules[] = 'required';
            } else {
                $fieldRules[] = 'nullable';
            }

            // Type-specific rules
            match ($campo['tipo'] ?? 'texto') {
                'email'    => $fieldRules[] = 'email|max:255',
                'numero'   => $fieldRules[] = 'numeric',
                'textarea' => $fieldRules[] = 'string|max:5000',
                'select'   => $fieldRules[] = 'string|max:255',
                default    => $fieldRules[] = 'string|max:1000',
            };

            $rules[$nombre] = implode('|', $fieldRules);
        }

        $validated = $request->validate($rules);

        FormularioRespuesta::create([
            'formulario_id' => $formulario->id,
            'datos'         => $validated,
        ]);

        return redirect()
            ->back()
            ->with('success', '¡Formulario enviado exitosamente! Gracias por su respuesta.');
    }
}
