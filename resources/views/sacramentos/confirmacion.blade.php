<x-sacramento-layout
    title="Confirmación"
    subtitle="El don del Espíritu Santo"
    icon="local_fire_department"
    color="primary"
    :requisitos="[]"
    :heroImage="asset('images/heroes/hero_confirma.webp')"
>
    @slot('description')
        <p>Con el Bautismo y la Eucaristía, el sacramento de la Confirmación constituye el conjunto de los "sacramentos de la iniciación cristiana". Enriquece a los bautizados con una fuerza especial del Espíritu Santo, los une más firmemente a Cristo y a su Iglesia, y los fortalece para ser testigos de la fe.</p>
    @endslot

    <div class="mb-16">
        <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Preparación</span>
        <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-8">Requisitos</h3>
        
        <div class="space-y-8">
            {{-- Jovenes --}}
            <div>
                <h4 class="flex items-center gap-2 text-lg font-bold text-text-dark dark:text-white mb-4">
                    <span class="material-symbols-outlined text-primary">groups</span>
                    Jóvenes
                </h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Fotocopia de la partida de nacimiento.</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Constancia de bautismo (Original).</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Constancia de primera comunión (Original).</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Ofrenda.</p>
                    </div>
                </div>
            </div>

            {{-- Adultos --}}
            <div>
                <h4 class="flex items-center gap-2 text-lg font-bold text-text-dark dark:text-white mb-4">
                    <span class="material-symbols-outlined text-primary">person</span>
                    Adultos
                </h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Fotocopia de la partida de nacimiento y de la tarjeta de identidad.</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Constancia de bautismo (Original).</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Constancia de primera comunión (Original).</p>
                    </div>
                </div>
            </div>

            {{-- Padrinos --}}
            <div>
                <h4 class="flex items-center gap-2 text-lg font-bold text-text-dark dark:text-white mb-4">
                    <span class="material-symbols-outlined text-primary">diversity_3</span>
                    Padrinos
                </h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Fotocopia de la tarjeta de identidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-sacramento-layout>
