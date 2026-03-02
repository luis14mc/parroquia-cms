<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for the Donaciones page.
 */
final class DonacionesController extends Controller
{
    /**
     * Display the donaciones page.
     */
    public function __invoke(): View
    {
        return view('donaciones');
    }
}
