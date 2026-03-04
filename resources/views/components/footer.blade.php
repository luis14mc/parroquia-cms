{{-- Main Footer --}}
@php
    $fc = [
        'contacto.facebook'  => 'https://www.facebook.com/cristoresucitadohn/',
        'contacto.instagram' => 'https://www.instagram.com/cristoresucitadohn',
        'contacto.youtube'   => 'https://www.youtube.com/channel/UCDZi5Fc70E2pPzze72SSpcw',
        'contacto.x'         => 'https://x.com/cristo_hn',
        'contacto.tiktok'    => 'https://www.tiktok.com/@cristoresucitadohn',
        'contacto.direccion' => 'Colonia Loarque, calle principal. Tegucigalpa, Honduras',
        'contacto.telefono'  => '9430-6883',
        'contacto.email'     => 'cristohnresucitado@gmail.com',
    ];
    $fcHorarios = [
        'lunes_viernes' => '9:00 AM - 5:00 PM',
        'sabado'        => '8:00 AM - 12:00 MD',
    ];
@endphp
<footer class="bg-[#242323] text-text-light">
    {{-- Main Footer Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
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
                    @if($fc['contacto.youtube'] ?? '')
                    <a href="{{ $fc['contacto.youtube'] }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-white/10 hover:bg-primary hover:text-background-dark flex items-center justify-center transition-colors" aria-label="YouTube">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a2.994 2.994 0 0 0-2.112-2.112C19.633 3.5 12 3.5 12 3.5s-7.633 0-9.386.574a2.994 2.994 0 0 0-2.112 2.112C0 7.939 0 12 0 12s0 4.061.502 5.814a2.994 2.994 0 0 0 2.112 2.112C4.367 20.5 12 20.5 12 20.5s7.633 0 9.386-.574a2.994 2.994 0 0 0 2.112-2.112C24 16.061 24 12 24 12s0-4.061-.502-5.814zM9.545 15.568V8.432l6.545 3.568-6.545 3.568z"/></svg>
                    </a>
                    @endif
                    @if($fc['contacto.x'] ?? '')
                    <a href="{{ $fc['contacto.x'] }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-white/10 hover:bg-primary hover:text-background-dark flex items-center justify-center transition-colors" aria-label="X">
                        <!-- Icono oficial X (antes Twitter) -->
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.53 3.5h3.97l-7.43 8.49 8.01 9.51h-4.01l-5.7-6.76-6.36 6.76H1.5l8.18-9.71L.66 3.5h4.18l5.09 6.03L15.53 3.5z"/></svg>
                    </a>
                    @endif
                    @if($fc['contacto.tiktok'] ?? '')
                    <a href="{{ $fc['contacto.tiktok'] }}" target="_blank" rel="noopener" class="w-10 h-10 rounded-full bg-white/10 hover:bg-primary hover:text-background-dark flex items-center justify-center transition-colors" aria-label="TikTok">
                        <!-- Icono oficial TikTok -->
                        <svg class="w-5 h-5" viewBox="0 0 48 48" fill="currentColor" aria-hidden="true"><path d="M41.5 14.5c-3.2 0-6.1-1.3-8.3-3.4V32c0 6.6-5.4 12-12 12s-12-5.4-12-12 5.4-12 12-12c.3 0 .7 0 1 .1v5.1c-.3 0-.7-.1-1-.1-3.8 0-7 3.1-7 7s3.1 7 7 7 7-3.1 7-7V4.5h5.5c.2 3.2 2.9 5.7 6.1 5.7v4.3z"/></svg>
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
                        <a href="{{ route('pastorales.show.familiar') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                            Pastorales
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dimensiones.show.samaritana') }}" class="text-text-muted hover:text-primary transition-colors inline-flex items-center gap-2">
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
        </div>
    </div>
    {{-- Copyright Bar --}}
    <div class="border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-text-muted">
                <p>&copy; {{ date('Y') }} Parroquia Cristo Resucitado. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>
