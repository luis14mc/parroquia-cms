<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Contenido;
use App\Models\Intencion;
use App\Models\Sector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class IntencionesController extends Controller
{
    /**
     * Mostrar el formulario de intenciones con sectores dinámicos.
     */
    public function index(): View
    {
        return view('intenciones', [
            'contenidos' => Contenido::seccionArray('intenciones'),
            'general'    => Contenido::seccionArray('general'),
            'sectores'   => Sector::activos()->orderBy('nombre')->get(),
        ]);
    }

    /**
     * Almacenar una nueva intención enviada desde el formulario público.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'tipo'            => 'required|in:salud,difuntos,accion_gracias',
            'nombre_completo' => 'required|string|max:255',
            'telefono'        => 'nullable|string|max:30',
            'intencion'       => 'required|string|max:500',
            'fecha_deseada'   => 'required|date|after_or_equal:today',
            'sector_id'       => 'required|exists:sectores,id',
            'mensaje'         => 'nullable|string|max:2000',
        ]);

        $validated['estado'] = 'pendiente';

        Intencion::create($validated);

        return redirect()
            ->route('intenciones')
            ->with('success', '¡Su intención ha sido enviada exitosamente! Será incluida en nuestras próximas celebraciones.');
    }
}
