<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\MensajeContacto;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Controller for the Contacto page.
 */
final class ContactoController extends Controller
{
    /**
     * Display the contacto page.
     */
    public function index(): View
    {
        return view('contacto');
    }

    /**
     * Store a new contact message.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombre_completo' => ['required', 'string', 'max:255'],
            'email'           => ['required', 'email', 'max:255'],
            'asunto'          => ['required', 'string', 'max:255'],
            'mensaje'         => ['required', 'string', 'max:2000'],
        ]);

        MensajeContacto::create($validated);

        return redirect()->route('contacto')
            ->with('success', '¡Mensaje enviado! Nos pondremos en contacto con usted pronto.');
    }
}
