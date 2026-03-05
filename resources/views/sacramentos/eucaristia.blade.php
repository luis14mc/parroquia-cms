<x-sacramento-layout
    title="Eucaristía"
    subtitle="Fuente y cumbre de la vida cristiana"
    icon="emoji_food_beverage"
    color="secondary"
    :requisitos="[]"
    :heroImage="asset('images/heroes/hero_sacramentos.webp')"
>
    @slot('description')
        <p>La Eucaristía es el sacramento en el que recibimos el Cuerpo y la Sangre de Cristo. Es fuente y cumbre de toda la vida cristiana. En la Eucaristía se contiene todo el bien espiritual de la Iglesia, es decir, Cristo mismo, nuestra Pascua.</p>
        <p class="mt-4">La Primera Comunión es el momento en que los bautizados, habiendo alcanzado el uso de razón y preparados por la catequesis, reciben por primera vez el sacramento de la Eucaristía.</p>
    @endslot

    <div class="mb-16">
        <span class="text-secondary font-bold tracking-wide uppercase text-sm mb-2 block">Preparación</span>
        <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-8">Requisitos</h3>
        
        <div class="space-y-8">
            {{-- Niños --}}
            <div>
                <h4 class="flex items-center gap-2 text-lg font-bold text-text-dark dark:text-white mb-4">
                    <span class="material-symbols-outlined text-secondary">child_care</span>
                    Niños
                </h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-secondary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Fotocopia de la partida de nacimiento del niño(a).</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-secondary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Fotocopia de tarjetas de identidad de los padres.</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-secondary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Constancia de Bautismo (Original).</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-secondary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Ofrenda.</p>
                    </div>
                </div>
            </div>

            {{-- Adultos --}}
            <div>
                <h4 class="flex items-center gap-2 text-lg font-bold text-text-dark dark:text-white mb-4">
                    <span class="material-symbols-outlined text-secondary">person</span>
                    Adultos
                </h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-secondary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Fotocopia de la partida de nacimiento y de la tarjeta de identidad.</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-secondary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Constancia de Bautismo (Original).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-sacramento-layout>
