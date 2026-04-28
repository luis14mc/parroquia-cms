<x-layouts.app title="Inscripción recibida | Taller de la Solidaridad" description="Tu inscripción al taller ha sido registrada.">

    <section class="py-24 md:py-32 bg-background-light dark:bg-background-dark">
        <div class="max-w-lg mx-auto px-4 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-green-500/15 text-green-600 dark:text-green-400 mb-6">
                <span class="material-symbols-outlined text-4xl">check_circle</span>
            </div>
            <h1 class="text-3xl md:text-4xl font-black text-text-dark dark:text-white mb-4">
                ¡Gracias{{ session('nombre') ? ', '.session('nombre') : '' }}!
            </h1>
            <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-10">
                Hemos recibido tu inscripción al <strong>Taller de la Solidaridad</strong>. Te contactaremos pronto con más detalles.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}" class="btn-primary justify-center">
                    Ir al inicio
                </a>
                <a href="{{ route('home') }}#inscripciones" class="inline-flex items-center justify-center px-8 py-3.5 rounded-lg border border-gray-300 dark:border-gray-600 font-semibold text-text-dark dark:text-white hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                    Ver inscripciones en la página principal
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
