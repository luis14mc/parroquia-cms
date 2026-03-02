<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Header component for the main site navigation.
 */
final class Header extends Component
{
    /**
     * Get the view that represents the component.
     */
    public function render(): View
    {
        return view('components.header');
    }
}
