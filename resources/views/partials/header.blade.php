<header class="sticky top-0 z-50 w-full bg-white/95 dark:bg-background-dark/95 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800"
        x-data="{ mobileOpen: false }">
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0">
                <img src="{{ asset('images/logos/Logo_PCR.png') }}"
                     alt="Parroquia Cristo Resucitado"
                     class="h-10 w-auto"
                     onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                <span class="hidden items-center justify-center w-10 h-10 rounded-full bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-2xl">church</span>
                </span>
                <div class="hidden sm:flex flex-col">
                    <span class="text-base font-bold leading-none tracking-tight text-text-dark dark:text-white">Parroquia Cristo Resucitado</span>
                    <span class="text-xs text-muted font-medium">Comunidad de Fe y Esperanza</span>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-7">
                <a href="{{ route('home') }}"
                   class="text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'text-primary' : 'text-text-dark dark:text-gray-200 hover:text-primary' }}">
                    Inicio
                </a>
                <a href="{{ route('sacramentos') }}"
                   class="text-sm font-medium transition-colors {{ request()->routeIs('sacramentos') ? 'text-primary' : 'text-text-dark dark:text-gray-200 hover:text-primary' }}">
                    Sacramentos
                </a>

                {{-- Dropdown Pastorales --}}
                <div class="relative group">
                    <button class="flex items-center gap-0.5 text-sm font-medium transition-colors {{ request()->routeIs('pastorales', 'pastoral') ? 'text-primary' : 'text-text-dark dark:text-gray-200 hover:text-primary' }}">
                        Pastorales
                        <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                    </button>
                    <div class="absolute top-full left-0 mt-2 w-52 bg-white dark:bg-surface-dark shadow-lg rounded-lg border border-gray-100 dark:border-gray-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 origin-top-left">
                        <a href="{{ route('pastorales') }}" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-white/5 hover:text-primary transition-colors">Ver todas las Pastorales</a>
                        <a href="{{ route('dimensiones') }}" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-white/5 hover:text-primary transition-colors">Dimensiones Parroquiales</a>
                    </div>
                </div>

                <a href="{{ route('noticias') }}"
                   class="text-sm font-medium transition-colors {{ request()->routeIs('noticias', 'noticia') ? 'text-primary' : 'text-text-dark dark:text-gray-200 hover:text-primary' }}">
                    Noticias
                </a>
                <a href="{{ route('eventos') }}"
                   class="text-sm font-medium transition-colors {{ request()->routeIs('eventos', 'evento') ? 'text-primary' : 'text-text-dark dark:text-gray-200 hover:text-primary' }}">
                    Actividades
                </a>
                <a href="{{ route('intenciones') }}"
                   class="text-sm font-medium transition-colors {{ request()->routeIs('intenciones') ? 'text-primary' : 'text-text-dark dark:text-gray-200 hover:text-primary' }}">
                    Intenciones
                </a>
                <a href="{{ route('contacto') }}"
                   class="text-sm font-medium transition-colors {{ request()->routeIs('contacto') ? 'text-primary' : 'text-text-dark dark:text-gray-200 hover:text-primary' }}">
                    Contacto
                </a>
            </nav>

            <!-- Actions -->
            <div class="flex items-center gap-2">
                <button @click="document.documentElement.classList.toggle('dark')"
                        class="hidden lg:flex items-center justify-center w-10 h-10 rounded-full text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-white/10 transition-colors"
                        aria-label="Alternar modo oscuro">
                    <span class="material-symbols-outlined text-xl">dark_mode</span>
                </button>
                <a href="{{ route('donaciones') }}"
                   class="hidden sm:inline-flex items-center justify-center px-5 py-2 text-sm font-bold text-text-dark bg-primary rounded-lg hover:bg-primary/90 transition-all shadow-sm shadow-primary/30">
                    Donar
                </a>
                <button @click="mobileOpen = !mobileOpen"
                        class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-white/10 transition-colors"
                        aria-label="Abrir menú">
                    <span class="material-symbols-outlined" x-text="mobileOpen ? 'close' : 'menu'">menu</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-1"
         class="md:hidden bg-white dark:bg-background-dark border-t border-gray-100 dark:border-gray-800 px-4 pb-6 pt-3">
        <nav class="flex flex-col">
            <a href="{{ route('home') }}" @click="mobileOpen=false" class="py-3 px-2 text-sm font-medium border-b border-gray-100 dark:border-gray-800 {{ request()->routeIs('home') ? 'text-primary' : 'text-text-dark dark:text-gray-200' }} hover:text-primary transition-colors">Inicio</a>
            <a href="{{ route('sacramentos') }}" @click="mobileOpen=false" class="py-3 px-2 text-sm font-medium border-b border-gray-100 dark:border-gray-800 text-text-dark dark:text-gray-200 hover:text-primary transition-colors">Sacramentos</a>
            <a href="{{ route('pastorales') }}" @click="mobileOpen=false" class="py-3 px-2 text-sm font-medium border-b border-gray-100 dark:border-gray-800 text-text-dark dark:text-gray-200 hover:text-primary transition-colors">Pastorales</a>
            <a href="{{ route('dimensiones') }}" @click="mobileOpen=false" class="py-3 px-2 text-sm font-medium border-b border-gray-100 dark:border-gray-800 text-text-dark dark:text-gray-200 hover:text-primary transition-colors">Dimensiones</a>
            <a href="{{ route('noticias') }}" @click="mobileOpen=false" class="py-3 px-2 text-sm font-medium border-b border-gray-100 dark:border-gray-800 text-text-dark dark:text-gray-200 hover:text-primary transition-colors">Noticias</a>
            <a href="{{ route('eventos') }}" @click="mobileOpen=false" class="py-3 px-2 text-sm font-medium border-b border-gray-100 dark:border-gray-800 text-text-dark dark:text-gray-200 hover:text-primary transition-colors">Actividades</a>
            <a href="{{ route('intenciones') }}" @click="mobileOpen=false" class="py-3 px-2 text-sm font-medium border-b border-gray-100 dark:border-gray-800 text-text-dark dark:text-gray-200 hover:text-primary transition-colors">Intenciones</a>
            <a href="{{ route('contacto') }}" @click="mobileOpen=false" class="py-3 px-2 text-sm font-medium border-b border-gray-100 dark:border-gray-800 text-text-dark dark:text-gray-200 hover:text-primary transition-colors">Contacto</a>
            <div class="mt-4 flex gap-3">
                <a href="{{ route('donaciones') }}" @click="mobileOpen=false" class="flex-1 flex items-center justify-center py-3 text-sm font-bold text-text-dark bg-primary rounded-lg hover:bg-primary/90 transition-all">Donar</a>
                <button @click="document.documentElement.classList.toggle('dark'); mobileOpen=false"
                        class="flex items-center justify-center w-12 h-12 rounded-lg border border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-white/10 transition-colors">
                    <span class="material-symbols-outlined">dark_mode</span>
                </button>
            </div>
        </nav>
    </div>
</header>
