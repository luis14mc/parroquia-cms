<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for the Intenciones page.
 */
final class IntencionesController extends Controller
{
    /**
     * Display the intenciones page.
     */
    public function __invoke(): View
    {
        return view('intenciones');
    }
}
