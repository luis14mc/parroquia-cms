<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Contracts\View\View;

final class NoticiasController extends Controller
{
    /**
     * Listado de noticias con filtro opcional por categoría.
     */
    public function index(): View
    {
        $categoria = request('categoria');

        $destacada = Noticia::publicadas()
            ->destacada()
            ->latest('fecha_publicacion')
            ->first();

        $noticias = Noticia::publicadas()
            ->when($categoria, fn ($q) => $q->categoria($categoria))
            ->when($destacada, fn ($q) => $q->where('id', '!=', $destacada->id))
            ->latest('fecha_publicacion')
            ->paginate(9);

        return view('noticias', [
            'destacada'         => $destacada,
            'noticias'          => $noticias,
            'categorias'        => Noticia::categorias(),
            'categoriaActual'   => $categoria,
        ]);
    }

    /**
     * Detalle de una noticia individual.
     */
    public function show(string $slug): View
    {
        $noticia = Noticia::publicadas()
            ->where('slug', $slug)
            ->firstOrFail();

        $relacionadas = Noticia::publicadas()
            ->where('id', '!=', $noticia->id)
            ->categoria($noticia->categoria)
            ->latest('fecha_publicacion')
            ->take(3)
            ->get();

        return view('noticias.show', [
            'noticia'      => $noticia,
            'relacionadas' => $relacionadas,
        ]);
    }
}
