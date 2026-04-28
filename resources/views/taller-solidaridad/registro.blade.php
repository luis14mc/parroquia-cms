<x-layouts.app title="Taller de la Solidaridad — Inscripción | Parroquia Cristo Resucitado" description="Inscríbete al taller de la solidaridad en la Parroquia Cristo Resucitado.">

    <section class="relative w-full bg-text-dark text-white overflow-hidden py-14 md:py-20">
        <div class="absolute inset-0 z-0 opacity-25 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-secondary/40 via-transparent to-transparent"></div>
        <div class="relative z-10 max-w-[900px] mx-auto px-4 text-center">
            <span class="inline-flex items-center gap-1 rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-white backdrop-blur-sm mb-4">
                <span class="material-symbols-outlined text-[16px]">volunteer_activism</span>
                Pastoral social
            </span>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-black tracking-tight mb-4">
                Taller de la Solidaridad
            </h1>
            <p class="text-gray-300 text-lg max-w-xl mx-auto leading-relaxed">
                Completa el formulario para confirmar tu participación. Nos pondremos en contacto contigo.
            </p>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-background-light dark:bg-background-dark">
        <div class="max-w-xl mx-auto px-4">
            <div class="bg-white dark:bg-[#211c11] rounded-2xl p-8 shadow-sm border border-gray-100 dark:border-gray-800">
                @error('db')
                    <div class="mb-6 rounded-xl border border-red-200 dark:border-red-900/50 bg-red-50 dark:bg-red-950/30 px-4 py-3 text-sm text-red-800 dark:text-red-200">
                        {{ $message }}
                    </div>
                @enderror

                <form action="{{ route('taller-solidaridad.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="nombre_completo" class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Nombre completo</label>
                        <input type="text" name="nombre_completo" id="nombre_completo" required value="{{ old('nombre_completo') }}"
                               class="w-full rounded-lg border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 outline-none transition-colors">
                        @error('nombre_completo')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="telefono" class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Teléfono</label>
                        <input type="tel" name="telefono" id="telefono" required value="{{ old('telefono') }}"
                               class="w-full rounded-lg border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 outline-none transition-colors">
                        @error('telefono')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Correo electrónico</label>
                        <input type="email" name="email" id="email" required value="{{ old('email') }}"
                               class="w-full rounded-lg border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 outline-none transition-colors">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="sector_parroquial" class="block text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Sector parroquial</label>
                        <input type="text" name="sector_parroquial" id="sector_parroquial" required value="{{ old('sector_parroquial') }}" placeholder="Ej. comunidad, grupo o zona que participas"
                               class="w-full rounded-lg border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-800 text-text-dark dark:text-white focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 outline-none transition-colors">
                        @error('sector_parroquial')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="w-full btn-primary justify-center py-3.5 text-base font-bold">
                        <span class="material-symbols-outlined text-xl">how_to_reg</span>
                        Enviar inscripción
                    </button>
                </form>
            </div>
            <p class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400">
                <a href="{{ route('home') }}" class="text-primary hover:underline">← Volver al inicio</a>
            </p>
        </div>
    </section>
</x-layouts.app>
