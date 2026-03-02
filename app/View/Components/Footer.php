<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Footer component for the main site footer.
 */
final class Footer extends Component
{
    /**
     * Get the view that represents the component.
     */
    public function render(): View
    {
        return view('components.footer');
    }
}
