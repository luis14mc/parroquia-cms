<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for the Contacto page.
 */
final class ContactoController extends Controller
{
    /**
     * Display the contacto page.
     */
    public function __invoke(): View
    {
        return view('contacto');
    }
}
