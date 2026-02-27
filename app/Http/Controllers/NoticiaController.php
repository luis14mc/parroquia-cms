<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::publicadas()
            ->orderByDesc('publicado_en')
            ->orderByDesc('created_at')
            ->paginate(12);

        return view('pages.noticias', compact('noticias'));
    }

    public function show(Noticia $noticia)
    {
        if (!$noticia->es_publicada) {
            abort(404);
        }

        return view('pages.noticia', compact('noticia'));
    }
}
