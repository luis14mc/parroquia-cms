<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class NoticiasController extends Controller
{
    public function index(): View
    {
        return view('noticias');
    }

    public function show(string $slug): View
    {
        return view('noticias.show', ['slug' => $slug]);
    }
}
