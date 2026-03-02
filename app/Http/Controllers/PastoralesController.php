<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for individual Pastorales views.
 */
final class PastoralesController extends Controller
{
    private const VALID_PASTORALES = [
        'familiar',
        'juvenil',
        'medios',
        'vocacional',
        'infantil',
        'duelo',
    ];

    /**
     * Display a specific pastoral.
     */
    public function show(string $pastoral): View
    {
        abort_unless(in_array($pastoral, self::VALID_PASTORALES, true), 404);

        return view("pastorales.{$pastoral}");
    }
}
