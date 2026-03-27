<?php

namespace App\Http\Controllers;

use App\Models\DueloRegistro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            'telefono'        => 'required|string|max:20',
            'email'           => 'nullable|email|max:255',
            'confirmar_asistencia' => 'required|in:0,1',
        ]);

        $registro = DueloRegistro::create([
            'nombre_completo'      => $validated['nombre_completo'],
            'telefono'             => $validated['telefono'],
            'email'                => $validated['email'] ?? null,
            'confirmar_asistencia' => (bool) $validated['confirmar_asistencia'],
        ]);

        Log::info('Nuevo registro congreso', ['id' => $registro->id, 'nombre' => $registro->nombre_completo]);

        return redirect()->route('campaña-duelo.gracias')->with([
            'nombre'    => $registro->nombre_completo,
            'telefono'  => $registro->telefono,
            'asistencia' => $registro->confirmar_asistencia,
        ]);
    }
}
