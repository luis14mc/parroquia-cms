<?php

declare(strict_types=1);

namespace App\View\Components\Layouts;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class App extends Component
{
    public function __construct(
        public string $title = 'Parroquia Cristo Resucitado',
        public string $description = 'Comunidad de Fe y Esperanza',
    ) {}

    public function render(): View
    {
        return view('layouts.app');
    }
}
