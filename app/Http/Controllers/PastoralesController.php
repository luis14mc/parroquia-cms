<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for the Pastorales page.
 */
final class PastoralesController extends Controller
{
    /**
     * Display the pastorales page.
     */
    public function __invoke(): View
    {
        return view('pastorales');
    }
}
