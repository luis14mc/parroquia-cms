<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Contracts\View\View;

/**
 * Controller for the Donaciones page.
 */
final class DonacionesController extends Controller
{
    /**
     * Display the donaciones page with dynamic CMS content.
     */
    public function __invoke(): View
    {
        return view('donaciones', [
            'contenidos' => Contenido::seccionArray('donaciones'),
            'general'    => Contenido::seccionArray('general'),
        ]);
    }
}
