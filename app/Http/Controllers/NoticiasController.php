<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for the Noticias page.
 */
final class NoticiasController extends Controller
{
    /**
     * Display the noticias page.
     */
    public function __invoke(): View
    {
        return view('noticias');
    }
}
