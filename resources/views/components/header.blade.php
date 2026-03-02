{{-- Sticky Header Navigation --}}
<header x-data="{ mobileMenuOpen: false, pastoralesOpen: false, dimensionesOpen: false }" 
        class="sticky top-0 z-50 bg-white/95 dark:bg-background-dark/95 backdrop-blur-sm shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center group">
                <img src="{{ asset('images/Logo_PCR.png') }}"
                     alt="Logo Parroquia Cristo Resucitado"
                     class="h-10 w-auto group-hover:scale-110 transition-transform"
                     width="40"
                     height="40"
                     loading="eager">
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex items-center">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    Inicio
                </x-nav-link>

                {{-- Pastorales Dropdown --}}
                <div class="relative" x-on:mouseenter="pastoralesOpen = true" x-on:mouseleave="pastoralesOpen = false">
                    <button class="px-4 py-2 text-sm font-medium text-text-dark dark:text-text-light hover:text-primary transition-colors inline-flex items-center gap-1">
                        Pastorales
                        <span class="material-symbols-outlined text-base transition-transform" :class="{ 'rotate-180': pastoralesOpen }">
                            expand_more
                        </span>
                    </button>
                    <div x-show="pastoralesOpen" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute left-0 mt-1 w-56 bg-white dark:bg-zinc-800 rounded-lg shadow-lg ring-1 ring-black/5 py-2"
                         x-cloak>
                        <a href="{{ route('pastorales') }}" class="block px-4 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Todas las Pastorales
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Cáritas Parroquial
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Pastoral Juvenil
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Catequesis
                        </a>
                    </div>
                </div>

                {{-- Dimensiones Dropdown --}}
                <div class="relative" x-on:mouseenter="dimensionesOpen = true" x-on:mouseleave="dimensionesOpen = false">
                    <button class="px-4 py-2 text-sm font-medium text-text-dark dark:text-text-light hover:text-primary transition-colors inline-flex items-center gap-1">
                        Dimensiones
                        <span class="material-symbols-outlined text-base transition-transform" :class="{ 'rotate-180': dimensionesOpen }">
                            expand_more
                        </span>
                    </button>
                    <div x-show="dimensionesOpen" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute left-0 mt-1 w-56 bg-white dark:bg-zinc-800 rounded-lg shadow-lg ring-1 ring-black/5 py-2"
                         x-cloak>
                        <a href="{{ route('dimensiones') }}" class="block px-4 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Todas las Dimensiones
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Liturgia
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Formación
                        </a>
                    </div>
                </div>

                <x-nav-link :href="route('sacramentos')" :active="request()->routeIs('sacramentos')">
                    Sacramentos
                </x-nav-link>

                <x-nav-link :href="route('noticias')" :active="request()->routeIs('noticias')">
                    Noticias
                </x-nav-link>

                <x-nav-link :href="route('intenciones')" :active="request()->routeIs('intenciones')">
                    Intenciones
                </x-nav-link>

                <x-nav-link :href="route('contacto')" :active="request()->routeIs('contacto')">
                    Contacto
                </x-nav-link>
            </nav>

            {{-- CTA Button & Mobile Menu --}}
            <div class="flex items-center gap-3">
                <a href="{{ route('donaciones') }}" class="btn-primary hidden sm:inline-flex">
                    <span class="material-symbols-outlined text-lg">volunteer_activism</span>
                    Donar
                </a>

                {{-- Mobile Menu Button --}}
                <button x-on:click="mobileMenuOpen = !mobileMenuOpen" 
                        class="lg:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-800 transition-colors"
                        aria-label="Abrir menú">
                    <span class="material-symbols-outlined text-2xl" x-show="!mobileMenuOpen">menu</span>
                    <span class="material-symbols-outlined text-2xl" x-show="mobileMenuOpen" x-cloak>close</span>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="lg:hidden border-t border-border-light dark:border-border-dark py-4"
             x-cloak>
            <nav class="flex flex-col gap-1">
                <a href="{{ route('home') }}" class="px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('home') ? 'bg-primary/10 text-primary' : '' }}">
                    Inicio
                </a>
                <a href="{{ route('pastorales') }}" class="px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('pastorales') ? 'bg-primary/10 text-primary' : '' }}">
                    Pastorales
                </a>
                <a href="{{ route('dimensiones') }}" class="px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('dimensiones') ? 'bg-primary/10 text-primary' : '' }}">
                    Dimensiones
                </a>
                <a href="{{ route('sacramentos') }}" class="px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('sacramentos') ? 'bg-primary/10 text-primary' : '' }}">
                    Sacramentos
                </a>
                <a href="{{ route('noticias') }}" class="px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('noticias') ? 'bg-primary/10 text-primary' : '' }}">
                    Noticias
                </a>
                <a href="{{ route('intenciones') }}" class="px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('intenciones') ? 'bg-primary/10 text-primary' : '' }}">
                    Intenciones
                </a>
                <a href="{{ route('contacto') }}" class="px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('contacto') ? 'bg-primary/10 text-primary' : '' }}">
                    Contacto
                </a>
                <a href="{{ route('donaciones') }}" class="btn-primary mt-3 justify-center">
                    <span class="material-symbols-outlined text-lg">volunteer_activism</span>
                    Donar
                </a>
            </nav>
        </div>
    </div>
</header>
