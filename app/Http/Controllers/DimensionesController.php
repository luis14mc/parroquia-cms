<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for the Dimensiones pages (solo vistas individuales).
 */
final class DimensionesController extends Controller
{
    private const VALID_DIMENSIONES = [
        'samaritana',
        'comunidades',
        'pascual',
        'misionera',
    ];

    /**
     * Display an individual dimension page.
     */
    public function show(string $dimension): View
    {
        abort_unless(in_array($dimension, self::VALID_DIMENSIONES, true), 404);

        return view("dimensiones.{$dimension}");
    }
}
