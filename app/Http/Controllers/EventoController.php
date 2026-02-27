<?php

namespace App\Http\Controllers;

use App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::publicados()
            ->orderBy('inicio_en')
            ->paginate(12);

        return view('pages.eventos', compact('eventos'));
    }

    public function show(Evento $evento)
    {
        if (!$evento->es_publicado) {
            abort(404);
        }

        return view('pages.evento', compact('evento'));
    }
}
