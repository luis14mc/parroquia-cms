<x-layouts.app title="Donaciones y Ofrendas | Parroquia Cristo Resucitado" description="Apreciamos mucho tu colaboración. Conoce las distintas formas de apoyar a nuestra parroquia.">

    {{-- ═══════════════════════════════════════════════════════
         1. HERO
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative w-full h-[420px] sm:h-[480px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBauEQj5kWjQjEd5mGwsIhVE5oZSrGyN6hQwN76EV0utFsH_uOGcJLrKueh_gMcAX9g4sn5kOOCZ55enTFKo_UuqJ5hQXBferamPurGnlI_rWiUocv8xnE_h8xvYP7zQ3ntYsTC7GxaxOfp3t91pAWAuuAsCyDVy5sBXpKFheokyGCGOny828JU4u_k_EiIBLQb6Jkt6xrEjxs9rViH_QJoZb3aN5ZOQyjNIc0bIN0m3WpW1VxfvcrXHwaadTloP-B7F43OIN1obpM');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <span class="inline-block px-4 py-1.5 mb-5 text-xs font-bold tracking-widest text-white uppercase bg-primary/80 rounded-full">
                <span class="material-symbols-outlined text-sm align-middle mr-1">volunteer_activism</span>
                Apoya nuestra misión
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                Donaciones
            </h1>
        </div>
    </section>



    <div class="flex-grow w-full max-w-[1200px] mx-auto px-4 py-10 md:py-16">

        {{-- Intro Text --}}
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-black uppercase tracking-wide text-text-dark dark:text-text-light mb-6">
                Apreciamos Mucho Tu Colaboración
            </h2>
            <div class="w-20 h-1 bg-primary mx-auto mb-6"></div>
            <p class="text-base md:text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                Tus oraciones son lo más importante para seguir llevando la Buena Noticia de Salvación a todos los rincones,
                pero si deseas dar un paso más allá, a continuación puedes ver distintas formas de apoyar a nuestra parroquia:
            </p>
        </div>

        {{-- Tabs Section --}}
        <div x-data="{ activeTab: 'bancarias' }" class="flex flex-col md:flex-row gap-0 bg-white dark:bg-zinc-800 rounded-xl shadow-lg border border-gray-200 dark:border-zinc-700 overflow-hidden">

            {{-- Sidebar Tabs --}}
            <div class="md:w-72 flex-shrink-0 flex md:flex-col overflow-x-auto md:overflow-x-visible no-scrollbar bg-gray-50 dark:bg-zinc-900 rounded-t-xl md:rounded-t-none md:rounded-l-xl">
                <button @click="activeTab = 'bancarias'"
                    :class="activeTab === 'bancarias'
                        ? 'bg-white dark:bg-zinc-800 text-primary border-b-2 md:border-b-0 md:border-l-4 border-primary font-bold'
                        : 'bg-secondary dark:bg-secondary/80 text-white hover:bg-secondary/90 border-b-2 md:border-b-0 md:border-l-4 border-transparent'"
                    class="flex items-center gap-3 px-4 py-3 md:px-5 md:py-4 text-left text-xs md:text-sm transition-all w-full min-w-max md:min-w-0">
                    <span class="material-symbols-outlined text-xl">account_balance</span>
                    Cuentas Bancarias
                </button>
                <button @click="activeTab = 'capilla'"
                    :class="activeTab === 'capilla'
                        ? 'bg-white dark:bg-zinc-800 text-primary border-b-2 md:border-b-0 md:border-l-4 border-primary font-bold'
                        : 'bg-secondary dark:bg-secondary/80 text-white hover:bg-secondary/90 border-b-2 md:border-b-0 md:border-l-4 border-transparent'"
                    class="flex items-center gap-3 px-4 py-3 md:px-5 md:py-4 text-left text-xs md:text-sm transition-all w-full min-w-max md:min-w-0">
                    <span class="material-symbols-outlined text-xl">church</span>
                    Capilla del Santísimo
                </button>
                <button @click="activeTab = 'libra'"
                    :class="activeTab === 'libra'
                        ? 'bg-white dark:bg-zinc-800 text-primary border-b-2 md:border-b-0 md:border-l-4 border-primary font-bold'
                        : 'bg-secondary dark:bg-secondary/80 text-white hover:bg-secondary/90 border-b-2 md:border-b-0 md:border-l-4 border-transparent'"
                    class="flex items-center gap-3 px-4 py-3 md:px-5 md:py-4 text-left text-xs md:text-sm transition-all w-full min-w-max md:min-w-0">
                    <span class="material-symbols-outlined text-xl">temple_buddhist</span>
                    Libra del Amor
                </button>
                <button @click="activeTab = 'dennys'"
                    :class="activeTab === 'dennys'
                        ? 'bg-white dark:bg-zinc-800 text-primary border-b-2 md:border-b-0 md:border-l-4 border-primary font-bold'
                        : 'bg-secondary dark:bg-secondary/80 text-white hover:bg-secondary/90 border-b-2 md:border-b-0 md:border-l-4 border-transparent'"
                    class="flex items-center gap-3 px-4 py-3 md:px-5 md:py-4 text-left text-xs md:text-sm transition-all w-full min-w-max md:min-w-0">
                    <span class="material-symbols-outlined text-xl">restaurant</span>
                    Denny's
                </button>
            </div>

            {{-- Content Area --}}
            <div class="flex-1 p-6 md:p-10">

                {{-- Tab: Cuentas Bancarias --}}
                <div x-show="activeTab === 'bancarias'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <h2 class="text-2xl font-bold text-text-dark dark:text-text-light mb-4">Cuentas Bancarias</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-8">
                        Puedes realizar un aporte económico a las siguientes cuentas:
                    </p>

                    <div class="space-y-8">
                        {{-- BAC Credomatic --}}
                        <div class="flex items-start gap-4 md:gap-5">
                            <div class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 bg-red-50 dark:bg-red-900/20 rounded-xl flex items-center justify-center">
                                <svg viewBox="0 0 100 100" class="w-10 h-10 md:w-14 md:h-14">
                                    <polygon points="15,85 50,15 85,85 50,50" fill="#CC0000"/>
                                    <polygon points="50,15 85,85 50,50" fill="#FF0000"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-text-dark dark:text-text-light">BAC Credomatic</h3>
                                <p class="text-gray-500 dark:text-gray-400">Tipo de Cuenta: Cuenta de Ahorros</p>
                                <p class="text-gray-500 dark:text-gray-400">Nombre: Parroquia Cristo Resucitado</p>
                                <p class="text-gray-500 dark:text-gray-400">Número: <span class="font-semibold text-text-dark dark:text-text-light">743-795-261</span></p>
                                <button @click="navigator.clipboard.writeText('743795261')" class="mt-2 inline-flex items-center gap-1 text-xs text-primary hover:text-primary/80 font-medium transition-colors">
                                    <span class="material-symbols-outlined text-sm">content_copy</span> Copiar número
                                </button>
                            </div>
                        </div>

                        <hr class="border-gray-200 dark:border-zinc-700">

                        {{-- Banpaís --}}
                        <div class="flex items-start gap-4 md:gap-5">
                            <div class="flex-shrink-0 w-14 h-14 md:w-20 md:h-20 bg-blue-50 dark:bg-blue-900/20 rounded-xl flex items-center justify-center">
                                <svg viewBox="0 0 100 100" class="w-10 h-10 md:w-14 md:h-14">
                                    <circle cx="50" cy="50" r="40" fill="#003399" stroke="#003399" stroke-width="3"/>
                                    <text x="50" y="58" text-anchor="middle" fill="white" font-size="28" font-weight="bold" font-family="Arial">bp</text>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-text-dark dark:text-text-light">Banpaís</h3>
                                <p class="text-gray-500 dark:text-gray-400">Tipo de Cuenta: Cuenta de Cheque</p>
                                <p class="text-gray-500 dark:text-gray-400">Nombre: Parroquia Cristo Resucitado</p>
                                <p class="text-gray-500 dark:text-gray-400">Número: <span class="font-semibold text-text-dark dark:text-text-light">013000012507</span></p>
                                <button @click="navigator.clipboard.writeText('013000012507')" class="mt-2 inline-flex items-center gap-1 text-xs text-primary hover:text-primary/80 font-medium transition-colors">
                                    <span class="material-symbols-outlined text-sm">content_copy</span> Copiar número
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-200 dark:border-zinc-700">
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">
                            <strong>Nota:</strong> Favor enviar comprobante de transferencia por WhatsApp para emitir su recibo de donación.
                        </p>
                        <a href="https://wa.me/50494306883?text=Hola%2C%20le%20env%C3%ADo%20comprobante%20de%20mi%20donaci%C3%B3n."
                           class="inline-flex items-center gap-2 text-sm font-bold text-green-600 hover:text-green-700 transition-colors">
                            <span class="material-symbols-outlined text-lg">chat</span>
                            Enviar Comprobante por WhatsApp
                        </a>
                    </div>
                </div>

                {{-- Tab: Capilla del Santísimo --}}
                <div x-show="activeTab === 'capilla'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-cloak>
                    <h2 class="text-2xl font-bold text-text-dark dark:text-text-light mb-4">Capilla del Santísimo</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        La construcción de la Capilla del Santísimo es un proyecto especial de nuestra parroquia. Este espacio sagrado
                        será un lugar de adoración permanente donde los fieles podrán encontrarse con Jesús Eucaristía en un ambiente
                        de recogimiento y oración.
                    </p>
                    <div class="bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-xl p-6 mb-6">
                        <h3 class="font-bold text-text-dark dark:text-text-light mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">volunteer_activism</span>
                            ¿Cómo puedo colaborar?
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            Puedes aportar económicamente a través de las cuentas bancarias de la parroquia indicando como referencia
                            <strong>"Capilla del Santísimo"</strong>, o puedes acercarte directamente a la oficina parroquial para realizar tu aporte.
                        </p>
                    </div>
                    <a href="https://wa.me/50494306883?text=Hola%2C%20quiero%20colaborar%20con%20la%20Capilla%20del%20Sant%C3%ADsimo."
                       class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-md">
                        <span class="material-symbols-outlined">chat</span>
                        Quiero colaborar
                    </a>
                </div>

                {{-- Tab: Libra del Amor --}}
                <div x-show="activeTab === 'libra'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-cloak>
                    <h2 class="text-2xl font-bold text-text-dark dark:text-text-light mb-4">Libra del Amor</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        La <strong>Libra del Amor</strong> es una iniciativa solidaria de nuestra parroquia. Consiste en donar una libra de
                        alimento básico (arroz, frijoles, azúcar, harina, etc.) que se recolecta periódicamente para armar despensas
                        destinadas a las familias más necesitadas de nuestras comunidades.
                    </p>
                    <div class="bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-xl p-6 mb-6">
                        <h3 class="font-bold text-text-dark dark:text-text-light mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">inventory_2</span>
                            ¿Cómo participo?
                        </h3>
                        <ul class="text-gray-600 dark:text-gray-300 text-sm space-y-2 leading-relaxed">
                            <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span> Lleva tu libra de alimento a la iglesia durante las misas dominicales.</li>
                            <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span> Las despensas se distribuyen mensualmente a familias identificadas por la Dimensión Samaritana.</li>
                            <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span> También puedes donar económicamente para la compra de alimentos.</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/50494306883?text=Hola%2C%20quiero%20participar%20en%20la%20Libra%20del%20Amor."
                       class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-md">
                        <span class="material-symbols-outlined">chat</span>
                        Más información
                    </a>
                </div>

                {{-- Tab: Denny's --}}
                <div x-show="activeTab === 'dennys'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-cloak>
                    <h2 class="text-2xl font-bold text-text-dark dark:text-text-light mb-4">Denny's</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        A través de una alianza con <strong>Denny's</strong>, nuestra parroquia ofrece cupones de descuento que puedes adquirir.
                        Al comprar estos cupones, una parte del monto se destina directamente a los proyectos y necesidades de la parroquia.
                    </p>
                    <div class="bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-xl p-6 mb-6">
                        <h3 class="font-bold text-text-dark dark:text-text-light mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">local_offer</span>
                            ¿Cómo funciona?
                        </h3>
                        <ul class="text-gray-600 dark:text-gray-300 text-sm space-y-2 leading-relaxed">
                            <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span> Adquiere tus cupones en la oficina parroquial o con los encargados durante las misas.</li>
                            <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span> Disfruta de tus alimentos en Denny's con descuentos especiales.</li>
                            <li class="flex items-start gap-2"><span class="material-symbols-outlined text-primary text-sm mt-0.5">check_circle</span> Tu compra apoya directamente a la parroquia. ¡Todos ganan!</li>
                        </ul>
                    </div>
                    <a href="https://wa.me/50494306883?text=Hola%2C%20quiero%20adquirir%20cupones%20de%20Denny's%20para%20apoyar%20la%20parroquia."
                       class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition-colors shadow-md">
                        <span class="material-symbols-outlined">chat</span>
                        Quiero mis cupones
                    </a>
                </div>

            </div>
        </div>

        {{-- Quote / Footer Message --}}
        <div class="mt-16 mb-6 text-center max-w-2xl mx-auto">
            <span class="material-symbols-outlined text-4xl text-primary/30 mb-4">format_quote</span>
            <p class="text-xl italic font-medium text-text-dark dark:text-gray-300 mb-4">
                "Cada uno dé como propuso en su corazón: no con tristeza, ni por necesidad, porque Dios ama al dador alegre."
            </p>
            <p class="text-sm font-bold text-primary uppercase tracking-widest">2 Corintios 9:7</p>
        </div>

    </div>

</x-layouts.app>
