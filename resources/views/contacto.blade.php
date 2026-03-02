<x-layouts.app title="Contacto y Ubicación | Parroquia Cristo Resucitado" description="Visítenos en nuestra parroquia o póngase en contacto con nosotros a través de nuestros canales digitales.">

    {{-- Hero / Title Section --}}
    <div class="w-full bg-white py-12 px-6 lg:px-40 border-b border-gray-100">
        <div class="max-w-[1200px] mx-auto text-center md:text-left">
            <p class="text-secondary text-sm font-bold uppercase tracking-wider mb-2">Estamos para servirle</p>
            <h1 class="text-text-dark text-4xl md:text-5xl font-black leading-tight tracking-tight mb-4">
                Contacto y Ubicación
            </h1>
            <p class="text-gray-600 text-lg font-normal leading-relaxed max-w-2xl">
                Visítenos en nuestra parroquia para la oración y comunión, o póngase en contacto con nosotros a través de nuestros canales digitales.
            </p>
        </div>
    </div>

    {{-- Content Grid --}}
    <div class="w-full px-6 py-12 lg:px-40 lg:py-16">
        <div class="max-w-[1200px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">

            {{-- Left Column: Contact Form --}}
            <div class="lg:col-span-7 flex flex-col gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="text-2xl font-bold text-text-dark mb-6">Envíenos un mensaje</h3>
                    <form class="flex flex-col gap-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label class="flex flex-col gap-2">
                                <span class="text-gray-700 text-sm font-semibold">Nombre Completo</span>
                                <input class="w-full rounded-lg border-gray-300 bg-gray-50 text-text-dark focus:border-secondary focus:ring-secondary h-12 px-4 transition-colors" placeholder="Juan Pérez" type="text" />
                            </label>
                            <label class="flex flex-col gap-2">
                                <span class="text-gray-700 text-sm font-semibold">Correo Electrónico</span>
                                <input class="w-full rounded-lg border-gray-300 bg-gray-50 text-text-dark focus:border-secondary focus:ring-secondary h-12 px-4 transition-colors" placeholder="juan@ejemplo.com" type="email" />
                            </label>
                        </div>
                        <label class="flex flex-col gap-2">
                            <span class="text-gray-700 text-sm font-semibold">Asunto</span>
                            <input class="w-full rounded-lg border-gray-300 bg-gray-50 text-text-dark focus:border-secondary focus:ring-secondary h-12 px-4 transition-colors" placeholder="Motivo de su mensaje" type="text" />
                        </label>
                        <label class="flex flex-col gap-2">
                            <span class="text-gray-700 text-sm font-semibold">Mensaje</span>
                            <textarea class="w-full rounded-lg border-gray-300 bg-gray-50 text-text-dark focus:border-secondary focus:ring-secondary min-h-[160px] p-4 resize-y transition-colors" placeholder="Escriba su mensaje aquí..."></textarea>
                        </label>
                        <button class="self-start px-8 py-3 bg-secondary hover:bg-secondary/90 text-white font-bold rounded-lg transition-all transform hover:scale-[1.02] shadow-md flex items-center gap-2" type="submit">
                            <span>Enviar Mensaje</span>
                            <span class="material-symbols-outlined text-sm">send</span>
                        </button>
                    </form>
                </div>
            </div>

            {{-- Right Column: Info & Map --}}
            <div class="lg:col-span-5 flex flex-col gap-8">

                {{-- Office Hours Card (Gold Border) --}}
                <div class="relative bg-white p-6 rounded-xl shadow-sm border-l-4 border-primary overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined text-6xl text-primary">schedule</span>
                    </div>
                    <h3 class="text-xl font-bold text-text-dark mb-4 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">calendar_clock</span>
                        Horario de Oficina
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex justify-between text-gray-600 border-b border-dashed border-gray-200 pb-2">
                            <span>Lunes - Viernes</span>
                            <span class="font-medium text-text-dark">8:00 AM - 5:00 PM</span>
                        </li>
                        <li class="flex justify-between text-gray-600 border-b border-dashed border-gray-200 pb-2">
                            <span>Sábados</span>
                            <span class="font-medium text-text-dark">9:00 AM - 12:00 PM</span>
                        </li>
                        <li class="flex justify-between text-gray-600">
                            <span>Domingos</span>
                            <span class="font-medium text-text-dark">Cerrado</span>
                        </li>
                    </ul>
                </div>

                {{-- Contact Details --}}
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-col gap-6">
                    {{-- Address --}}
                    <div class="flex gap-4 items-start">
                        <div class="bg-gray-100 p-2.5 rounded-full text-secondary shrink-0">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-dark text-base">Dirección Física</h4>
                            <p class="text-gray-600 text-sm mt-1 leading-relaxed">
                                Colonia Loarque, Salida al Sur<br />
                                Tegucigalpa, Honduras
                            </p>
                        </div>
                    </div>
                    {{-- Phone --}}
                    <div class="flex gap-4 items-start">
                        <div class="bg-gray-100 p-2.5 rounded-full text-secondary shrink-0">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-dark text-base">Teléfonos</h4>
                            <p class="text-gray-600 text-sm mt-1">
                                <a class="hover:text-secondary transition-colors" href="tel:+50422220000">+504 2222-0000</a>
                            </p>
                            <p class="text-gray-600 text-sm">
                                <a class="hover:text-secondary transition-colors" href="tel:+50422220001">+504 2222-0001</a>
                            </p>
                        </div>
                    </div>
                    {{-- Email --}}
                    <div class="flex gap-4 items-start">
                        <div class="bg-gray-100 p-2.5 rounded-full text-secondary shrink-0">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-text-dark text-base">Correo Electrónico</h4>
                            <p class="text-gray-600 text-sm mt-1">
                                <a class="hover:text-secondary transition-colors" href="mailto:info@cristoresucitado.hn">info@cristoresucitado.hn</a>
                            </p>
                        </div>
                    </div>
                    {{-- Social Media --}}
                    <div class="pt-4 mt-2 border-t border-gray-100">
                        <p class="text-xs font-semibold uppercase tracking-wider text-gray-500 mb-3">Síguenos</p>
                        <div class="flex gap-3">
                            <a class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-100 text-gray-600 hover:bg-[#1877F2] hover:text-white transition-all duration-300" href="#">
                                <span class="material-symbols-outlined">public</span>
                            </a>
                            <a class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-100 text-gray-600 hover:bg-[#E4405F] hover:text-white transition-all duration-300" href="#">
                                <span class="material-symbols-outlined">photo_camera</span>
                            </a>
                            <a class="h-10 w-10 flex items-center justify-center rounded-lg bg-gray-100 text-gray-600 hover:bg-[#25D366] hover:text-white transition-all duration-300" href="#">
                                <span class="material-symbols-outlined">chat</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Map Embed Placeholder --}}
                <div class="h-64 w-full rounded-xl overflow-hidden shadow-sm border border-gray-200 bg-gray-200 relative group">
                    <div class="absolute inset-0 bg-gray-300 flex items-center justify-center bg-cover bg-center opacity-80 transition-opacity group-hover:opacity-100">
                        <span class="material-symbols-outlined text-5xl text-gray-400">map</span>
                    </div>
                    <div class="absolute bottom-4 left-4">
                        <a class="px-4 py-2 bg-white text-text-dark text-xs font-bold rounded shadow-lg hover:bg-gray-50 transition-colors flex items-center gap-2" href="#">
                            <span class="material-symbols-outlined text-sm text-secondary">directions</span>
                            Cómo llegar
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Pre-footer CTA --}}
    <div class="w-full bg-text-dark text-white py-16 px-6 lg:px-40 mt-8">
        <div class="max-w-[960px] mx-auto text-center flex flex-col items-center gap-6">
            <h2 class="text-3xl font-bold">¿Desea solicitar una Misa?</h2>
            <p class="text-gray-300 max-w-lg">
                Puede realizar sus intenciones de misa o solicitar información sobre sacramentos directamente contactando a secretaría.
            </p>
            <div class="flex gap-4 flex-wrap justify-center">
                <a href="{{ route('intenciones') }}" class="px-6 py-3 bg-secondary hover:bg-secondary/90 text-white font-bold rounded-lg transition-colors">
                    Contactar Secretaría
                </a>
                <a href="{{ route('home') }}" class="px-6 py-3 bg-transparent border border-white/20 hover:bg-white/10 text-white font-bold rounded-lg transition-colors">
                    Ver Horarios de Misa
                </a>
            </div>
        </div>
    </div>

</x-layouts.app>
