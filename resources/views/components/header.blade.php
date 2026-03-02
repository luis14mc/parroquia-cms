{{-- Sticky Header Navigation --}}
<header x-data="{ 
            mobileMenuOpen: false, 
            pastoralesOpen: false, 
            dimensionesOpen: false,
            mobilePastoralesOpen: false,
            mobileDimensionesOpen: false
        }" 
        @click.outside="pastoralesOpen = false; dimensionesOpen = false"
        class="sticky top-0 z-50 bg-white/95 dark:bg-background-dark/95 backdrop-blur-sm shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Logo (solo imagen, sin texto) --}}
            <a href="{{ route('home') }}" class="flex items-center group">
                {{-- Logo oscuro para modo claro --}}
                <img src="{{ asset('images/Logo_PCR.png') }}"
                     alt="Logo Parroquia Cristo Resucitado"
                     class="h-10 w-auto group-hover:scale-110 transition-transform dark:hidden"
                     width="40"
                     height="40"
                     loading="eager">
                {{-- Logo blanco para modo oscuro --}}
                <img src="{{ asset('images/Logo_PCR_Blanco.png') }}"
                     alt="Logo Parroquia Cristo Resucitado"
                     class="h-10 w-auto group-hover:scale-110 transition-transform hidden dark:block"
                     width="40"
                     height="40"
                     loading="eager">
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex items-center gap-8">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    Inicio
                </x-nav-link>

                <x-nav-link :href="route('nosotros')" :active="request()->routeIs('nosotros')">
                    Nosotros
                </x-nav-link>

                {{-- Pastorales Dropdown --}}
                <div class="relative" 
                     x-on:mouseenter="pastoralesOpen = true; dimensionesOpen = false" 
                     x-on:mouseleave="pastoralesOpen = false">
                    <button @click="pastoralesOpen = !pastoralesOpen; dimensionesOpen = false"
                            class="text-sm font-medium text-text-dark dark:text-text-light hover:text-primary transition-colors inline-flex items-center gap-1 py-5">
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
                         class="absolute top-full left-1/2 -translate-x-1/2 w-56 bg-white dark:bg-zinc-800 rounded-lg shadow-lg ring-1 ring-black/5 dark:ring-white/10 py-2"
                         x-cloak>
                        <a href="{{ route('pastorales.show', 'familiar') }}" class="block px-4 py-2.5 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Familiar
                        </a>
                        <a href="{{ route('pastorales.show', 'juvenil') }}" class="block px-4 py-2.5 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Juvenil
                        </a>
                        <a href="{{ route('pastorales.show', 'medios') }}" class="block px-4 py-2.5 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Medios
                        </a>
                        <a href="{{ route('pastorales.show', 'vocacional') }}" class="block px-4 py-2.5 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Vocacional
                        </a>
                        <a href="{{ route('pastorales.show', 'infantil') }}" class="block px-4 py-2.5 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Infantil
                        </a>
                        <a href="{{ route('pastorales.show', 'duelo') }}" class="block px-4 py-2.5 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Duelo
                        </a>
                    </div>
                </div>

                {{-- Dimensiones Dropdown --}}
                <div class="relative" 
                     x-on:mouseenter="dimensionesOpen = true; pastoralesOpen = false" 
                     x-on:mouseleave="dimensionesOpen = false">
                    <button @click="dimensionesOpen = !dimensionesOpen; pastoralesOpen = false"
                            class="text-sm font-medium text-text-dark dark:text-text-light hover:text-primary transition-colors inline-flex items-center gap-1 py-5">
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
                         class="absolute top-full left-1/2 -translate-x-1/2 w-56 bg-white dark:bg-zinc-800 rounded-lg shadow-lg ring-1 ring-black/5 dark:ring-white/10 py-2"
                         x-cloak>
                        <a href="{{ route('dimensiones.show', 'samaritana') }}" class="block px-4 py-2.5 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Samaritana
                        </a>
                        <a href="{{ route('dimensiones.show', 'comunidades') }}" class="block px-4 py-2.5 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Comunidades
                        </a>
                        <a href="{{ route('dimensiones.show', 'pascual') }}" class="block px-4 py-2.5 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Pascual
                        </a>
                        <a href="{{ route('dimensiones.show', 'misionera') }}" class="block px-4 py-2.5 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary transition-colors">
                            Misionera
                        </a>
                    </div>
                </div>

                <x-nav-link :href="route('sacramentos')" :active="request()->routeIs('sacramentos')">
                    Sacramentos
                </x-nav-link>

                <x-nav-link :href="route('contacto')" :active="request()->routeIs('contacto')">
                    Contacto
                </x-nav-link>
            </nav>

            {{-- CTA Button, Theme Toggle & Mobile Menu --}}
            <div class="flex items-center gap-3">
                {{-- Dark/Light Mode Toggle --}}
                <button @click="$store.theme.toggle()" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-800 transition-colors" aria-label="Cambiar tema">
                    {{-- Sol (modo oscuro activo → click cambia a claro) --}}
                    <span class="material-symbols-outlined text-xl text-yellow-500" x-show="$store.theme.dark" x-cloak>light_mode</span>
                    {{-- Luna (modo claro activo → click cambia a oscuro) --}}
                    <span class="material-symbols-outlined text-xl text-gray-600" x-show="!$store.theme.dark">dark_mode</span>
                </button>

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
             class="lg:hidden border-t border-border-light dark:border-border-dark py-4 max-h-[calc(100dvh-4rem)] overflow-y-auto"
             x-cloak>
            <nav class="flex flex-col gap-1">
                <a href="{{ route('home') }}" class="px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('home') ? 'bg-primary/10 text-primary' : '' }}">
                    Inicio
                </a>
                <a href="{{ route('nosotros') }}" class="px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('nosotros') ? 'bg-primary/10 text-primary' : '' }}">
                    Nosotros
                </a>

                {{-- Pastorales accordion --}}
                <div>
                    <button @click="mobilePastoralesOpen = !mobilePastoralesOpen" 
                            class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('pastorales.show') ? 'bg-primary/10 text-primary' : '' }}">
                        <span>Pastorales</span>
                        <span class="material-symbols-outlined text-base transition-transform duration-200" :class="{ 'rotate-180': mobilePastoralesOpen }">expand_more</span>
                    </button>
                    <div x-show="mobilePastoralesOpen"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 -translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-1"
                         x-cloak>
                        <div class="ml-4 pl-4 border-l-2 border-primary/20 flex flex-col gap-0.5 py-1">
                            <a href="{{ route('pastorales.show', 'familiar') }}" class="px-3 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-md transition-colors">Familiar</a>
                            <a href="{{ route('pastorales.show', 'juvenil') }}" class="px-3 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-md transition-colors">Juvenil</a>
                            <a href="{{ route('pastorales.show', 'medios') }}" class="px-3 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-md transition-colors">Medios</a>
                            <a href="{{ route('pastorales.show', 'vocacional') }}" class="px-3 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-md transition-colors">Vocacional</a>
                            <a href="{{ route('pastorales.show', 'infantil') }}" class="px-3 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-md transition-colors">Infantil</a>
                            <a href="{{ route('pastorales.show', 'duelo') }}" class="px-3 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-md transition-colors">Duelo</a>
                        </div>
                    </div>
                </div>

                {{-- Dimensiones accordion --}}
                <div>
                    <button @click="mobileDimensionesOpen = !mobileDimensionesOpen" 
                            class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('dimensiones.show') ? 'bg-primary/10 text-primary' : '' }}">
                        <span>Dimensiones</span>
                        <span class="material-symbols-outlined text-base transition-transform duration-200" :class="{ 'rotate-180': mobileDimensionesOpen }">expand_more</span>
                    </button>
                    <div x-show="mobileDimensionesOpen"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 -translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-1"
                         x-cloak>
                        <div class="ml-4 pl-4 border-l-2 border-primary/20 flex flex-col gap-0.5 py-1">
                            <a href="{{ route('dimensiones.show', 'samaritana') }}" class="px-3 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-md transition-colors">Samaritana</a>
                            <a href="{{ route('dimensiones.show', 'comunidades') }}" class="px-3 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-md transition-colors">Comunidades</a>
                            <a href="{{ route('dimensiones.show', 'pascual') }}" class="px-3 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-md transition-colors">Pascual</a>
                            <a href="{{ route('dimensiones.show', 'misionera') }}" class="px-3 py-2 text-sm text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-md transition-colors">Misionera</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('sacramentos') }}" class="px-4 py-3 text-sm font-medium text-text-dark dark:text-text-light hover:bg-primary/10 hover:text-primary rounded-lg transition-colors {{ request()->routeIs('sacramentos') ? 'bg-primary/10 text-primary' : '' }}">
                    Sacramentos
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
