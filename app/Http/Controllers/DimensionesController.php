<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for the Dimensiones page.
 */
final class DimensionesController extends Controller
{
    /**
     * Display the dimensiones page.
     */
    public function __invoke(): View
    {
        return view('dimensiones');
    }
}
