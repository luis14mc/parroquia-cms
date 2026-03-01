<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Evento;

class HomeController extends Controller
{
    public function __invoke()
    {
        $noticias = Noticia::publicadas()
            ->orderByDesc('publicado_en')
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

        $eventos = Evento::publicados()
            ->proximos()
            ->orderBy('inicio_en')
            ->limit(3)
            ->get();

        return view('pages.home', compact('noticias', 'eventos'));
    }
}
