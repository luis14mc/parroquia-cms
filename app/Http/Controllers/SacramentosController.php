<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for the Sacramentos page.
 */
final class SacramentosController extends Controller
{
    /**
     * Display the sacramentos page.
     */
    public function __invoke(): View
    {
        return view('sacramentos');
    }
}
