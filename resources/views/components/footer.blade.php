{{-- Main Footer --}}
@php
    $fc = \App\Models\Contenido::where('clave', 'like', 'contacto.%')
        ->orWhere('clave', 'like', 'general.%')
        ->pluck('valor', 'clave')
        ->toArray();
    $fcHorarios = json_decode($fc['contacto.horarios'] ?? '{}', true) ?: [];
@endphp
<footer class="bg-[#242323] text-text-light">
    {{-- Main Footer Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            {{-- Brand Column --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="inline-block mb-4">
                    <img src="{{ asset('images/Logo_PCR_Blanco.png') }}"
                         alt="Logo Parroquia Cristo Resucitado"
                         class="h-12 w-auto"
                         width="48"
                         height="48"
                         loading="lazy">
                </a>
                <p class="text-text-muted text-sm leading-relaxed mb-6">
                    Una comunidad de fe comprometida con el amor, la esperanza y el servicio a todos nuestros hermanos.
                </p>
                {{-- Social Links --}}
                <div class="flex items-center gap-3">
                    @if($fc['contacto.facebook'] ?? '')
                    <a href="{{ $fc['contacto.facebook'] }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-white/10 hover:bg-primary hover:text-background-dark flex items-center justify-center transition-colors" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                    </a>
                    @endif
                    @if($fc['contacto.instagram'] ?? '')
                    <a href="{{ $fc['contacto.instagram'] }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-white/10 hover:bg-primary hover:text-background-dark flex items-center justify-center transition-colors" aria-label="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    @endif
                    @if($fc['contacto.whatsapp'] ?? '')
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $fc['contacto.whatsapp']) }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-white/10 hover:bg-primary hover:text-background-dark flex items-center justify-center transition-colors" aria-label="WhatsApp">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </a>
                    @endif
                </div>
            </div>

            {{-- Quick Links Column (mismos del navbar) --}}
            <div>
                <h4 class="font-bold text-lg mb-4">Enlaces Rápidos</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('home') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('nosotros') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Nosotros
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('pastorales.show', 'familiar') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Pastorales
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dimensiones.show', 'samaritana') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Dimensiones
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sacramentos') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Sacramentos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contacto') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Contacto
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
                            {{ $fc['contacto.direccion'] ?? 'Colonia Loarque, calle principal. Tegucigalpa, Honduras' }}
                        </span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">phone</span>
                        @php $fTel = $fc['contacto.telefono'] ?? '9430-6883'; @endphp
                        <a href="tel:+504{{ preg_replace('/[^0-9]/', '', $fTel) }}" class="text-text-muted hover:text-primary transition-colors text-sm">
                            {{ $fTel }}
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">mail</span>
                        @php $fEmail = $fc['contacto.email'] ?? 'cristohnresucitado@gmail.com'; @endphp
                        <a href="mailto:{{ $fEmail }}" class="text-text-muted hover:text-primary transition-colors text-sm">
                            {{ $fEmail }}
                        </a>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-primary mt-0.5">schedule</span>
                        <span class="text-text-muted text-sm">
                            @if(!empty($fcHorarios))
                                @foreach($fcHorarios as $dia => $hora)
                                    {{ ucfirst(str_replace('_', ' ', $dia)) }}: {{ $hora }}@if(!$loop->last)<br>@endif
                                @endforeach
                            @else
                                Lunes a Viernes: 9:00 AM - 5:00 PM<br>
                                Sábados: 8:00 AM - 12:00 MD
                            @endif
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
                <form class="space-y-3" x-data="{ sent: false }" @submit.prevent="sent = true">
                    <div x-show="!sent">
                        <label for="footer-email" class="sr-only">Correo electrónico</label>
                        <input type="email" 
                               id="footer-email" 
                               name="email" 
                               placeholder="Tu correo electrónico" 
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-text-light placeholder-text-muted focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-colors text-sm"
                               required>
                    </div>
                    <button x-show="!sent" type="submit" class="btn-primary w-full justify-center">
                        <span class="material-symbols-outlined text-lg">mail</span>
                        Suscribirse
                    </button>
                    <p x-show="sent" x-transition class="text-primary text-sm font-medium py-2">
                        ¡Gracias por tu interés! Próximamente activaremos el boletín.
                    </p>
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
