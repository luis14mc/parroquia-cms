<header class="w-full">
    <nav class="bg-parroquia-darkBg text-parroquia-darkText shadow-md" role="navigation" aria-label="Menú principal"
         id="main-nav">
        <div class="container mx-auto flex items-center justify-between p-4">
            <a href="{{ route('home') }}" class="text-lg font-bold text-parroquia-gold">
                Parroquia Cristo Resucitado
            </a>

            <div class="flex items-center gap-4">
                <button type="button" id="theme-toggle" aria-label="Alternar modo oscuro"
                        class="text-xl text-parroquia-gold cursor-pointer">
                    <span id="theme-icon">🌙</span>
                </button>

                <button type="button" id="menu-toggle" aria-label="Abrir menú móvil"
                        class="text-parroquia-gold text-2xl md:hidden cursor-pointer">
                    ☰
                </button>
            </div>

            <ul class="hidden md:flex space-x-6 text-sm">
                @foreach([
                    ['route' => 'home', 'label' => 'Inicio'],
                    ['route' => 'sacramentos', 'label' => 'Sacramentos'],
                    ['route' => 'dimensiones', 'label' => 'Dimensiones'],
                    ['route' => 'pastorales', 'label' => 'Pastorales'],
                    ['route' => 'noticias', 'label' => 'Noticias'],
                    ['route' => 'eventos', 'label' => 'Actividades'],
                    ['route' => 'intenciones', 'label' => 'Intenciones'],
                    ['route' => 'contacto', 'label' => 'Contacto'],
                    ['route' => 'donaciones', 'label' => 'Donaciones'],
                ] as $link)
                    <li>
                        <a href="{{ route($link['route']) }}"
                           class="hover:text-parroquia-gold transition-colors {{ request()->routeIs($link['route']) ? 'text-parroquia-gold font-semibold' : '' }}">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <ul id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-2 bg-parroquia-darkBg text-parroquia-darkText">
            @foreach([
                ['route' => 'home', 'label' => 'Inicio'],
                ['route' => 'sacramentos', 'label' => 'Sacramentos'],
                ['route' => 'dimensiones', 'label' => 'Dimensiones'],
                ['route' => 'pastorales', 'label' => 'Pastorales'],
                ['route' => 'noticias', 'label' => 'Noticias'],
                ['route' => 'eventos', 'label' => 'Actividades'],
                ['route' => 'intenciones', 'label' => 'Intenciones'],
                ['route' => 'contacto', 'label' => 'Contacto'],
                ['route' => 'donaciones', 'label' => 'Donaciones'],
            ] as $link)
                <li>
                    <a href="{{ route($link['route']) }}"
                       class="block py-2 border-b border-parroquia-gold/30 {{ request()->routeIs($link['route']) ? 'text-parroquia-gold font-semibold' : '' }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
