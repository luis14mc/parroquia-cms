<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class InscripcionesController extends Controller
{
    /**
     * Mostrar el formulario de inscripción.
     * Si viene ?programa=bautismo lo preselecciona.
     */
    public function index(): View
    {
        return view('inscripciones', [
            'programas'    => Inscripcion::programas(),
            'iconos'       => Inscripcion::iconos(),
            'colores'      => Inscripcion::colores(),
            'descripciones' => Inscripcion::descripciones(),
        ]);
    }

    /**
     * Almacenar una nueva inscripción.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'programa'           => 'required|in:' . implode(',', array_keys(Inscripcion::programas())),
            'nombre_completo'    => 'required|string|max:255',
            'email'              => 'nullable|email|max:255',
            'telefono'           => 'nullable|string|max:30',
            'fecha_nacimiento'   => 'nullable|date|before:today',
            'nombre_padre_madre' => 'nullable|string|max:255',
            'mensaje'            => 'nullable|string|max:2000',
        ]);

        $validated['estado'] = 'pendiente';

        Inscripcion::create($validated);

        return redirect()
            ->route('inscripciones')
            ->with('success', '¡Su inscripción ha sido recibida exitosamente! Nos pondremos en contacto con usted pronto.');
    }
}
