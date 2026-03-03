<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Contracts\View\View;

final class NosotrosController extends Controller
{
    /**
     * Display the about page with dynamic CMS content.
     */
    public function __invoke(): View
    {
        return view('nosotros', [
            'contenidos' => Contenido::seccionArray('nosotros'),
            'general'    => Contenido::seccionArray('general'),
        ]);
    }
}
