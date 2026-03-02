<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for the Sacramentos pages.
 */
final class SacramentosController extends Controller
{
    private const VALID_SACRAMENTOS = [
        'bautismo',
        'eucaristia',
        'confirmacion',
        'matrimonio',
        'reconciliacion',
        'uncion-de-enfermos',
    ];

    /**
     * Display the sacramentos landing page.
     */
    public function index(): View
    {
        return view('sacramentos.index');
    }

    /**
     * Display an individual sacramento page.
     */
    public function show(string $sacramento): View
    {
        abort_unless(in_array($sacramento, self::VALID_SACRAMENTOS, true), 404);

        return view("sacramentos.{$sacramento}");
    }
}
