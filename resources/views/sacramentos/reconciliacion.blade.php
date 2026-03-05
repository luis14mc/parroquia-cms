<x-sacramento-layout
    title="Reconciliación"
    subtitle="El sacramento de la misericordia de Dios"
    icon="church"
    color="primary"
    :requisitos="[]"
    :heroImage="asset('images/heroes/hero_confesion.webp')"
>
    @slot('description')
        <p>El sacramento de la Reconciliación o Confesión es el sacramento del perdón de los pecados cometidos después del Bautismo. A través de él, nos reconciliamos con Dios y con la Iglesia, recuperando la gracia y renovando nuestro compromiso de vida cristiana.</p>
    @endslot

    <div class="mb-16">
        <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Preparación</span>
        <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-8">Pasos para una buena confesión</h3>
        
        <div class="space-y-6">
            {{-- Examen de Conciencia --}}
            <div class="flex items-start gap-4 bg-white dark:bg-[#211c11] rounded-xl p-6 border border-gray-100 dark:border-gray-800 shadow-sm">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-2xl">self_improvement</span>
                </div>
                <div>
                    <h4 class="font-bold text-text-dark dark:text-white text-lg mb-2">1. Examen de Conciencia</h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        Significa recordar los pecados cometidos desde la última confesión bien hecha. Se aconseja repasar los Mandamientos de la Ley de Dios, los de la Iglesia y los deberes del propio estado. El examen debe ser cuidadoso.
                    </p>
                </div>
            </div>

            {{-- Arrepentimiento --}}
            <div class="flex items-start gap-4 bg-white dark:bg-[#211c11] rounded-xl p-6 border border-gray-100 dark:border-gray-800 shadow-sm">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-2xl">favorite</span>
                </div>
                <div>
                    <h4 class="font-bold text-text-dark dark:text-white text-lg mb-2">2. Arrepentimiento</h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        Arrepentirse de todos los pecados sin excluir ninguno. Debe sentirse en el alma e implica el propósito firme de no volver a pecar. Si nace del amor a Dios, se llama arrepentimiento "perfecto".
                    </p>
                </div>
            </div>

            {{-- Confesar Todos los pecados --}}
            <div class="flex items-start gap-4 bg-white dark:bg-[#211c11] rounded-xl p-6 border border-gray-100 dark:border-gray-800 shadow-sm">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-2xl">record_voice_over</span>
                </div>
                <div>
                    <h4 class="font-bold text-text-dark dark:text-white text-lg mb-2">3. Confesar todos los pecados</h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed mb-2">La confesión debe ser:</p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                        <li class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                            <strong>Sincera:</strong> Sin ocultar lo grave.
                        </li>
                        <li class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                            <strong>Verdadera:</strong> Sin justificarse.
                        </li>
                        <li class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                            <strong>Completa:</strong> Según especie y número.
                        </li>
                        <li class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-400">
                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                            <strong>Sencilla:</strong> Sin rodeos.
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Satisfacción --}}
            <div class="flex items-start gap-4 bg-white dark:bg-[#211c11] rounded-xl p-6 border border-gray-100 dark:border-gray-800 shadow-sm">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-2xl">done_all</span>
                </div>
                <div>
                    <h4 class="font-bold text-text-dark dark:text-white text-lg mb-2">4. Satisfacción o cumplimiento de la penitencia</h4>
                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                        Ya sea una oración, obra de caridad o sacrificio, es para expiar y reparar el daño causado por el pecado. Es la expresión de nuestra voluntad de conversión.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Horarios de Confesión --}}
    <div class="mb-16">
        <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Disponibilidad</span>
        <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-8">Horarios de Confesión</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="bg-primary/5 rounded-2xl p-6 border border-primary/10 flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center">
                    <span class="material-symbols-outlined">calendar_today</span>
                </div>
                <div>
                    <p class="text-sm font-bold text-text-dark dark:text-white">Jueves</p>
                    <p class="text-lg font-black text-primary">5:30 PM - 6:30 PM</p>
                </div>
            </div>
            <div class="bg-primary/5 rounded-2xl p-6 border border-primary/10 flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-primary text-white flex items-center justify-center">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <div>
                    <p class="text-sm font-bold text-text-dark dark:text-white">Domingos</p>
                    <p class="text-lg font-black text-primary">11:00 AM</p>
                    <p class="text-xs text-gray-500 italic">(Durante la misa)</p>
                </div>
            </div>
        </div>
    </div>
</x-sacramento-layout>
