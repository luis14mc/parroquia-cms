<x-layouts.app title="Inscripciones — Taller de la Solidaridad | Parroquia Cristo Resucitado" description="Listado de confirmaciones al taller de solidaridad.">

    @push('head')
        <meta name="robots" content="noindex, nofollow">
    @endpush

    <section class="relative w-full bg-text-dark text-white overflow-hidden py-12 md:py-16">
        <div class="absolute inset-0 z-0 opacity-25 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-secondary/40 via-transparent to-transparent"></div>
        <div class="relative z-10 max-w-[1100px] mx-auto px-4">
            <h1 class="text-2xl md:text-3xl font-black tracking-tight mb-2">
                Inscripciones — Taller de la Solidaridad
            </h1>
            <p class="text-gray-300 text-sm md:text-base max-w-2xl">
                Listado reservado para pastoral (URL no publicada).
                {{ $registros->total() }} {{ $registros->total() === 1 ? 'registro' : 'registros' }}.
            </p>
        </div>
    </section>

    <section class="py-10 md:py-14 bg-background-light dark:bg-background-dark">
        <div class="max-w-[1100px] mx-auto px-4 overflow-x-auto">
            @if ($registros->isEmpty())
                <p class="text-gray-600 dark:text-gray-400 text-center py-12">
                    Aún no hay inscripciones registradas en la base de datos.
                </p>
            @else
                <table class="min-w-full text-left text-sm border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden bg-white dark:bg-[#211c11]">
                    <thead class="bg-gray-50 dark:bg-gray-900/80 text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">
                        <tr>
                            <th class="px-4 py-3 font-semibold">#</th>
                            <th class="px-4 py-3 font-semibold">Nombre</th>
                            <th class="px-4 py-3 font-semibold">Teléfono</th>
                            <th class="px-4 py-3 font-semibold">Correo</th>
                            <th class="px-4 py-3 font-semibold">Sector</th>
                            <th class="px-4 py-3 font-semibold whitespace-nowrap">Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                        @foreach ($registros as $row)
                            <tr class="hover:bg-gray-50/80 dark:hover:bg-white/5">
                                <td class="px-4 py-3 text-gray-500 dark:text-gray-400">{{ $row->id }}</td>
                                <td class="px-4 py-3 font-medium text-text-dark dark:text-white">{{ $row->nombre_completo }}</td>
                                <td class="px-4 py-3">{{ $row->telefono }}</td>
                                <td class="px-4 py-3">{{ $row->email }}</td>
                                <td class="px-4 py-3">{{ $row->sector_parroquial }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-gray-600 dark:text-gray-400">
                                    {{ $row->created_at?->timezone(config('app.timezone'))->format('d/m/Y H:i') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-8">
                    {{ $registros->links() }}
                </div>
            @endif

            <p class="mt-10 text-center text-sm">
                <a href="{{ route('forms.show', ['slug' => 'taller-solidaridad']) }}" class="text-primary hover:underline">Ir al formulario de inscripción</a>
                <span class="mx-2 text-gray-400">·</span>
                <a href="{{ route('home') }}" class="text-gray-600 dark:text-gray-400 hover:underline">Inicio</a>
            </p>
        </div>
    </section>
</x-layouts.app>
