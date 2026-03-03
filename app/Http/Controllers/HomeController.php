<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Contenido;
use App\Models\Evento;
use App\Models\Formulario;
use App\Models\Noticia;
use Illuminate\Contracts\View\View;

final class HomeController extends Controller
{
    /**
     * Display the home page with dynamic CMS content.
     */
    public function __invoke(): View
    {
        return view('home', [
            'contenidos' => Contenido::seccionArray('home'),
            'general'    => Contenido::seccionArray('general'),
            'noticias'   => Noticia::publicadas()
                                ->latest('fecha_publicacion')
                                ->take(6)
                                ->get(),
            'eventos'    => Evento::activos()
                                ->proximos()
                                ->take(6)
                                ->get(),
            'formularios' => Formulario::visiblesEnHome()->get(),
        ]);
    }
}
