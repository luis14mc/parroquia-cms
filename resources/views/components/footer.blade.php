{{-- Main Footer --}}
<footer class="bg-background-dark text-text-light">
    {{-- Main Footer Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            {{-- Brand Column --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center gap-2 mb-4">
                    <img src="{{ asset('images/Logo_PCR_Blanco.png') }}"
                         alt="Logo Parroquia Cristo Resucitado"
                         class="h-10 w-auto"
                         width="40"
                         height="40"
                         loading="lazy">
                    <span class="font-bold text-xl">Cristo Resucitado</span>
                </a>
                <p class="text-text-muted text-sm leading-relaxed mb-6">
                    Una comunidad de fe comprometida con el amor, la esperanza y el servicio a todos nuestros hermanos.
                </p>
                {{-- Social Links --}}
                <div class="flex items-center gap-3">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-primary hover:text-background-dark flex items-center justify-center transition-colors" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-primary hover:text-background-dark flex items-center justify-center transition-colors" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 hover:bg-primary hover:text-background-dark flex items-center justify-center transition-colors" aria-label="YouTube">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Quick Links Column --}}
            <div>
                <h4 class="font-bold text-lg mb-4">Enlaces Rápidos</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('sacramentos') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Sacramentos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('noticias') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Noticias
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pastorales') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Pastorales
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dimensiones') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Dimensiones
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('intenciones') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Intenciones de Misa
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('donaciones') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Donaciones
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Contact Column --}}
            <div>
                <h4 class="font-bold text-lg mb-4">Contacto</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary mt-0.5">location_on</span>
                        <span class="text-text-muted text-sm">
                            Colonia Kennedy, Bloque A,<br>
                            Tegucigalpa, Honduras
                        </span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">phone</span>
                        <a href="tel:+50422001234" class="text-text-muted hover:text-primary transition-colors text-sm">
                            +504 2200-1234
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">mail</span>
                        <a href="mailto:info@cristoresucitado.hn" class="text-text-muted hover:text-primary transition-colors text-sm">
                            info@cristoresucitado.hn
                        </a>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary mt-0.5">schedule</span>
                        <span class="text-text-muted text-sm">
                            Lunes a Viernes: 8:00 AM - 6:00 PM<br>
                            Sábados: 8:00 AM - 12:00 PM
                        </span>
                    </li>
                </ul>
            </div>

            {{-- Newsletter Column --}}
            <div>
                <h4 class="font-bold text-lg mb-4">Boletín Informativo</h4>
                <p class="text-text-muted text-sm mb-4">
                    Suscríbete para recibir noticias, eventos y reflexiones de nuestra parroquia.
                </p>
                <form class="space-y-3">
                    @csrf
                    <div>
                        <label for="footer-email" class="sr-only">Correo electrónico</label>
                        <input type="email" 
                               id="footer-email" 
                               name="email" 
                               placeholder="Tu correo electrónico" 
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-text-light placeholder-text-muted focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors text-sm"
                               required>
                    </div>
                    <button type="submit" class="btn-primary w-full justify-center">
                        <span class="material-symbols-outlined text-lg">mail</span>
                        Suscribirse
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Copyright Bar --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-text-muted">
                <p>&copy; {{ date('Y') }} Parroquia Cristo Resucitado. Todos los derechos reservados.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="hover:text-primary transition-colors">Política de Privacidad</a>
                    <a href="#" class="hover:text-primary transition-colors">Términos de Uso</a>
                </div>
            </div>
        </div>
    </div>
</footer>
