<?php

namespace App\Http\Controllers;

use App\Models\DueloRegistro;
use Illuminate\Http\Request;

class DueloRegistroController extends Controller
{
    public function index()
    {
        return view('campaña-duelo.registro');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'confirmar_asistencia' => 'required|boolean',
        ]);

        DueloRegistro::create($validated);

        return back()->with('success', '¡Gracias por registrarte! Tu información ha sido enviada correctamente.');
    }
}
