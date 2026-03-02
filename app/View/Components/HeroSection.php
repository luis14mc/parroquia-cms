<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Hero section component with background image and overlay.
 */
final class HeroSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $subtitle = '',
        public string $image = '',
        public string $ctaText = '',
        public string $ctaUrl = '#',
        public string $secondaryCtaText = '',
        public string $secondaryCtaUrl = '#',
        public bool $centered = true,
        public string $size = 'lg', // sm, md, lg, xl
    ) {}

    /**
     * Get the view that represents the component.
     */
    public function render(): View
    {
        return view('components.hero-section');
    }
}
