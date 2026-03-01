<footer class="bg-background-dark text-white pt-20 pb-10 border-t border-gray-800">
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            <!-- Columna 1: Marca -->
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <img src="{{ asset('images/logos/Logo_PCR_Blanco.png') }}"
                         alt="Parroquia Cristo Resucitado"
                         class="h-12 w-auto"
                         onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                    <span class="hidden items-center justify-center w-10 h-10 rounded-full bg-primary text-text-dark">
                        <span class="material-symbols-outlined text-2xl">church</span>
                    </span>
                    <h2 class="text-base font-bold leading-tight">Parroquia<br>Cristo Resucitado</h2>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Llevando la palabra de Dios a cada rincón de nuestra comunidad. Somos una iglesia viva, misionera y solidaria.
                </p>
                <div class="flex gap-3">
                    <a href="#" aria-label="Facebook"
                       class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-text-dark transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" fill-rule="evenodd"/></svg>
                    </a>
                    <a href="#" aria-label="YouTube"
                       class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-text-dark transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path clip-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.419-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" fill-rule="evenodd"/></svg>
                    </a>
                    <a href="https://wa.me/50494306883" aria-label="WhatsApp"
                       class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-text-dark transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Columna 2: Links Rápidos -->
            <div>
                <h3 class="text-white font-bold mb-6 text-sm uppercase tracking-wider">Enlaces Rápidos</h3>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li><a href="{{ route('sacramentos') }}" class="hover:text-primary transition-colors">Sacramentos</a></li>
                    <li><a href="{{ route('intenciones') }}" class="hover:text-primary transition-colors">Solicitar Intenciones de Misa</a></li>
                    <li><a href="{{ route('noticias') }}" class="hover:text-primary transition-colors">Noticias Parroquiales</a></li>
                    <li><a href="{{ route('pastorales') }}" class="hover:text-primary transition-colors">Pastorales y Ministerios</a></li>
                    <li><a href="{{ route('donaciones') }}" class="hover:text-primary transition-colors">Donaciones</a></li>
                    <li><a href="{{ route('dimensiones') }}" class="hover:text-primary transition-colors">Dimensiones Parroquiales</a></li>
                </ul>
            </div>

            <!-- Columna 3: Contacto -->
            <div>
                <h3 class="text-white font-bold mb-6 text-sm uppercase tracking-wider">Contacto</h3>
                <ul class="space-y-4 text-sm text-gray-400">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary shrink-0 text-[18px] mt-0.5">location_on</span>
                        <span>Colonia Loarque, Salida al Sur,<br>Tegucigalpa, Honduras</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary shrink-0 text-[18px]">call</span>
                        <a href="tel:+50494306883" class="hover:text-primary transition-colors">+504 9430-6883</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary shrink-0 text-[18px] mt-0.5">schedule</span>
                        <div>
                            <p>Lun – Sáb: 7:00 AM y 6:00 PM</p>
                            <p>Domingos: 8:00 AM, 10:00 AM y 5:00 PM</p>
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary shrink-0 text-[18px]">person</span>
                        <span>P. Javier Martinez, Párroco</span>
                    </li>
                </ul>
            </div>

            <!-- Columna 4: Suscripción -->
            <div>
                <h3 class="text-white font-bold mb-6 text-sm uppercase tracking-wider">Boletín Parroquial</h3>
                <p class="text-gray-400 text-sm mb-5 leading-relaxed">Recibe nuestros horarios y anuncios semanales en tu correo.</p>
                <form class="flex flex-col gap-3">
                    <input type="email"
                           placeholder="tu@correo.com"
                           class="bg-white/5 border border-white/10 rounded-lg px-4 py-2.5 text-white placeholder-gray-500 focus:outline-none focus:border-primary text-sm w-full transition-colors">
                    <button type="button"
                            class="bg-primary text-text-dark font-bold px-4 py-2.5 rounded-lg text-sm hover:bg-white hover:text-secondary transition-colors w-full">
                        Suscribirme
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
            <p>© {{ date('Y') }} Parroquia Cristo Resucitado. Todos los derechos reservados.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-white transition-colors">Política de Privacidad</a>
                <a href="#" class="hover:text-white transition-colors">Términos de Uso</a>
            </div>
        </div>
    </div>
</footer>
