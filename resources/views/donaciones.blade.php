<x-layouts.app title="Donaciones y Ofrendas | Parroquia Cristo Resucitado" description="Apreciamos mucho tu colaboración. Conoce las distintas formas de apoyar a nuestra parroquia.">

    {{-- ═══════════════════════════════════════════════════════
         1. HERO
    ═══════════════════════════════════════════════════════ --}}
    <section class="relative w-full h-[380px] sm:h-[450px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/heroes/hero_donaciones.webp') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30"></div>
        </div>
        <div class="relative z-10 text-center px-4">
            <span class="inline-block px-4 py-1.5 mb-5 text-xs font-bold tracking-widest text-white uppercase bg-primary/80 rounded-full">
                <span class="material-symbols-outlined text-sm align-middle mr-1">volunteer_activism</span>
                Apoya nuestra misión
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight drop-shadow-md">
                Donaciones y Ofrendas
            </h1>
        </div>
    </section>

    <div class="bg-background-light dark:bg-background-dark">
        <div class="max-w-[1200px] mx-auto px-4 py-24 sm:py-32">
            
            {{-- ═══════════════════════════════════════════════════════
                 2. DONACIÓN SEGURA (BAC CREDOMATIC) - DESTACADO
            ═══════════════════════════════════════════════════════ --}}
            <section class="relative z-20 -mt-40 mb-32 sm:mb-48">
                <div class="bg-white dark:bg-[#211c11] rounded-3xl shadow-2xl border border-gray-100 dark:border-gray-800 overflow-hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-12">
                        {{-- Imagen/Decoración --}}
                        <div class="lg:col-span-5 bg-primary/5 dark:bg-primary/10 flex items-center justify-center p-12">
                            <div class="text-center space-y-6">
                                <div class="w-24 h-24 mx-auto bg-white dark:bg-gray-800 rounded-3xl shadow-xl flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined text-5xl">security</span>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-black text-text-dark dark:text-white">Donación Segura</h3>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm mt-2">Plataforma de pagos en línea</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Contenido CTA --}}
                        <div class="lg:col-span-7 p-8 lg:p-12 flex flex-col justify-center">
                            <h2 class="text-3xl font-black text-text-dark dark:text-white mb-4">Aporta en línea con tu tarjeta</h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-8 leading-relaxed text-lg">
                                Ahora puedes realizar tus ofrendas y donaciones de forma rápida y segura desde cualquier lugar utilizando tu tarjeta de crédito o débito.
                            </p>
                            <a href="https://ecommerce-credomatic.live.geopagos.com/parroquiacristoresucitadohn" 
                               target="_blank" rel="noopener"
                               class="inline-flex items-center justify-center gap-3 px-10 py-5 bg-primary hover:bg-primary/90 text-text-dark font-black rounded-2xl transition-all shadow-xl shadow-primary/20 group">
                                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">credit_card</span>
                                Donar Ahora en Línea
                            </a>
                            <p class="text-[10px] text-gray-400 mt-4 text-center lg:text-left uppercase tracking-widest font-bold">
                                Transacción 100% encriptada y segura
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ═══════════════════════════════════════════════════════
                 3. CUENTAS BANCARIAS
            ═══════════════════════════════════════════════════════ --}}
            <section id="cuentas" class="mb-32 sm:mb-48">
                <div class="text-center max-w-3xl mx-auto mb-20 ">
                    <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Transferencia Directa</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white mb-4">Cuentas Bancarias</h2>
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed">
                        Puedes realizar tu ofrenda mediante transferencia directa a nuestras cuentas oficiales.
                    </p>
                </div>

                <div class="flex justify-center max-w-5xl mx-auto">
                    {{-- BAC Credomatic --}}
                    <div class="max-w-2xl w-full bg-white dark:bg-[#211c11] rounded-3xl p-8 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-md transition-all group relative overflow-hidden">
                        <div class="flex items-center justify-between mb-8">
                            <img src="{{ asset('images/donaciones/logo_bac.png') }}" alt="BAC Credomatic" class="h-10 object-contain">
                            <div class="w-10 h-10 rounded-full bg-red-50 dark:bg-red-900/20 flex items-center justify-center text-red-600">
                                <span class="material-symbols-outlined">account_balance</span>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <div>
                                <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest mb-1">Número de Cuenta</p>
                                <div class="flex items-center gap-4">
                                    <span class="text-2xl font-black text-text-dark dark:text-white tracking-tighter">743-795-261</span>
                                    <button @click="navigator.clipboard.writeText('743795261'); $dispatch('notify', { message: 'Copiado al portapapeles' })" 
                                            class="p-2 bg-gray-50 dark:bg-gray-800 rounded-lg shadow-sm hover:text-primary transition-colors" title="Copiar número">
                                        <span class="material-symbols-outlined text-sm">content_copy</span>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Tipo</p>
                                    <p class="font-bold text-text-dark dark:text-white text-sm">Cuenta de Ahorros</p>
                                </div>
                                <div>
                                    <p class="text-[10px] uppercase font-bold text-gray-400 tracking-widest">Nombre</p>
                                    <p class="font-bold text-text-dark dark:text-white text-sm">Parroquia Cristo Resucitado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex items-center justify-center gap-4 p-4 bg-green-50 dark:bg-green-900/10 rounded-2xl border border-green-100 dark:border-green-900/20 max-w-2xl mx-auto">
                    <span class="material-symbols-outlined text-green-600">info</span>
                    <p class="text-sm text-green-800 dark:text-green-400">
                        <b>Importante:</b> Favor enviar el comprobante por <a href="https://wa.me/50494306883" target="_blank" class="font-black underline decoration-2 underline-offset-4">WhatsApp</a> para emitir su recibo oficial.
                    </p>
                </div>
            </section>

            {{-- ═══════════════════════════════════════════════════════
                 4. OTRAS FORMAS DE COLABORAR (CARDS)
            ═══════════════════════════════════════════════════════ --}}
            <section class="mb-32 sm:mb-48">
                <div class="text-center max-w-3xl mx-auto mb-20 ">
                    <span class="text-primary font-bold tracking-wide uppercase text-sm mb-2 block">Iniciativas Comunitarias</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-text-dark dark:text-white mb-4">Otras formas de apoyar</h2>
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed">
                        Participa en nuestros proyectos y campañas especiales para fortalecer nuestra comunidad.
                    </p>
                </div>

                <div class="flex justify-center">
                    {{-- Libra del Amor --}}
                    <div class="max-w-md w-full bg-white dark:bg-[#211c11] rounded-3xl p-8 border border-gray-100 dark:border-gray-800 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all flex flex-col">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6">
                            <span class="material-symbols-outlined text-3xl">inventory_2</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-white mb-4">Libra del Amor</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed mb-6">
                            El primer domingo de cada mes se realiza una colecta de alimentos no perecederos (granos básicos, pastas y enlatados) para familias necesitadas de la zona.
                        </p>
                        
                        <div class="space-y-4 mb-8 flex-grow">
                            <p class="text-xs font-black uppercase tracking-widest text-primary">¿Cómo puedo ayudar?</p>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary text-lg mt-0.5">check_circle</span>
                                    <span class="text-xs text-gray-600 dark:text-gray-300 leading-tight">Lleva tu bolsa de alimentos y colócala en el Altar al momento del ofertorio.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary text-lg mt-0.5">check_circle</span>
                                    <span class="text-xs text-gray-600 dark:text-gray-300 leading-tight">Compra una bolsa de alimentos a los jóvenes en la entrada de la parroquia.</span>
                                </li>
                            </ul>
                        </div>

                        <a href="https://wa.me/50494306883?text=Hola%2C%20deseo%20saber%20m%C3%A1s%20sobre%20la%20Libra%20del%20Amor." 
                           target="_blank" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-gray-50 dark:bg-gray-800 hover:bg-primary hover:text-text-dark text-text-dark dark:text-white font-bold rounded-xl transition-all">
                            <span class="material-symbols-outlined text-sm">chat</span>
                            Más información
                        </a>
                    </div>
                </div>
            </section>

            {{-- Quote Final --}}
            <div class="mt-32 sm:mt-48 pb-24 text-center max-w-3xl mx-auto">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-8">
                    <span class="material-symbols-outlined text-3xl">format_quote</span>
                </div>
                <p class="text-2xl sm:text-3xl italic font-light text-text-dark dark:text-gray-300 leading-tight">
                    "Cada uno dé como propuso en su corazón: no con tristeza, ni por necesidad, porque Dios ama al dador alegre."
                </p>
                <p class="mt-6 font-black uppercase tracking-widest text-primary text-sm">2 Corintios 9:7</p>
            </div>

        </div>
    </div>

</x-layouts.app>
