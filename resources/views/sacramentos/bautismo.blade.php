<x-sacramento-layout
    title="Bautismo"
    subtitle="El sacramento de iniciación cristiana"
    icon="water_drop"
    color="primary"
    :requisitos="[]"
    :heroImage="asset('images/heroes/hero_bautismo.webp')"
>
    @slot('description')
        <p>El santo Bautismo es el fundamento de toda la vida cristiana y la puerta que abre el acceso a los otros sacramentos. Por el Bautismo somos liberados del pecado y regenerados como hijos de Dios, llegamos a ser miembros de Cristo y somos incorporados a la Iglesia y hechos partícipes de su misión.</p>
    @endslot

    <div class="mb-16">
        <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Preparación</span>
        <h3 class="text-2xl font-bold text-text-dark dark:text-white mb-8">Requisitos</h3>
        
        <div class="space-y-8">
            {{-- Padres de Familia --}}
            <div>
                <h4 class="flex items-center gap-2 text-lg font-bold text-text-dark dark:text-white mb-4">
                    <span class="material-symbols-outlined text-primary">family_restroom</span>
                    Padres de Familia
                </h4>
                <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm italic">Los padres son los únicos que pueden llevar al niño(a) a bautizar. Para ello deben:</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Presentar fotocopia de la partida de nacimiento del niño(a).</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Presentar fotocopia de la tarjeta de identidad.</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Recibir las charlas pre-bautismales.</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Preguntar la fecha en que se realizará el bautismo.</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Brindar una Ofrenda.</p>
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
                        <p class="text-text-dark dark:text-white text-sm">Profesar la fe católica.</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Presentar fotocopia de la tarjeta de identidad.</p>
                    </div>
                </div>
            </div>

            {{-- Adultos No Bautizados --}}
            <div>
                <h4 class="flex items-center gap-2 text-lg font-bold text-text-dark dark:text-white mb-4">
                    <span class="material-symbols-outlined text-primary">person</span>
                    Adultos No Bautizados
                </h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Presentar fotocopia de la partida de nacimiento y de la tarjeta de identidad.</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Presentar fotocopia de la tarjeta de identidad de los padrinos.</p>
                    </div>
                    <div class="flex items-start gap-3 bg-white dark:bg-[#211c11] rounded-xl p-4 border border-gray-100 dark:border-gray-800 shadow-sm sm:col-span-2">
                        <span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span>
                        <p class="text-text-dark dark:text-white text-sm">Los padres y padrinos deben recibir las charlas pre-bautismales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-sacramento-layout>
