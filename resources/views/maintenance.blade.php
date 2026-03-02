{{--
|--------------------------------------------------------------------------
| Maintenance Page – Parroquia Cristo Resucitado
|--------------------------------------------------------------------------
|
| Página de mantenimiento independiente (sin layout externo).
| Usa Tailwind CSS v4.2 (theme via CSS), Alpine.js y container queries.
|
--}}
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">

    <title>En Mantenimiento | Parroquia Cristo Resucitado</title>
    <meta name="description" content="Estamos realizando mejoras en nuestro sitio. Volveremos pronto.">

    {{-- Preconnect fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Inline critical styles for maintenance-specific animations --}}
    <style>
        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        @keyframes pulse-ring {
            0% { transform: scale(0.85); opacity: 1; }
            100% { transform: scale(2); opacity: 0; }
        }

        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-gradient {
            background-size: 300% 300%;
            animation: gradient-shift 12s ease infinite;
        }

        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        .animate-pulse-ring {
            animation: pulse-ring 2s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out both;
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }
        .delay-700 { animation-delay: 0.7s; }
    </style>
</head>

<body class="min-h-screen flex flex-col font-sans antialiased text-text-dark overflow-hidden relative">

    {{-- Animated gradient background --}}
    <div class="fixed inset-0 -z-10 animate-gradient bg-linear-to-br from-background-dark via-[#2a1f0a] to-[#1a0c08]"
         aria-hidden="true"></div>

    {{-- Subtle grid overlay --}}
    <div class="fixed inset-0 -z-10 opacity-[0.03]"
         style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23e3a822&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"
         aria-hidden="true"></div>

    {{-- Decorative orbs --}}
    <div class="fixed top-1/4 -left-32 w-96 h-96 rounded-full bg-primary/10 blur-3xl" aria-hidden="true"></div>
    <div class="fixed bottom-1/4 -right-32 w-96 h-96 rounded-full bg-secondary/10 blur-3xl" aria-hidden="true"></div>

    {{-- Main content --}}
    <main class="grow flex items-center justify-center px-4 py-12 sm:px-6 lg:px-8"
          role="main"
          aria-labelledby="maintenance-title">

        {{-- Container query wrapper --}}
        <div class="w-full max-w-2xl @container">

            <div class="text-center">

                {{-- Logo --}}
                <div class="animate-fade-in-up inline-flex items-center justify-center mb-8">
                    <div class="relative">
                        {{-- Pulse ring --}}
                        <span class="absolute inset-0 rounded-full bg-primary/20 animate-pulse-ring" aria-hidden="true"></span>
                        {{-- Logo container --}}
                        <div class="relative w-24 h-24 rounded-full bg-linear-to-br from-primary to-primary-dark flex items-center justify-center shadow-lg shadow-primary/30 animate-float p-4">
                            <img src="{{ asset('images/Logo_PCR_Blanco.png') }}"
                                 alt="Logo Parroquia Cristo Resucitado"
                                 class="w-full h-full object-contain drop-shadow-md"
                                 width="64"
                                 height="64"
                                 loading="eager">
                        </div>
                    </div>
                </div>

                {{-- Brand name --}}
                <p class="animate-fade-in-up delay-100 text-primary font-bold text-sm uppercase tracking-[0.2em] mb-4">
                    Parroquia Cristo Resucitado
                </p>

                {{-- Main heading --}}
                <h1 id="maintenance-title"
                    class="animate-fade-in-up delay-200 text-4xl sm:text-5xl lg:text-6xl font-black text-text-light leading-tight mb-6 text-balance">
                    Estamos mejorando<br>
                    <span class="bg-linear-to-r from-primary to-[#f0c050] bg-clip-text text-transparent">
                        nuestra experiencia
                    </span>
                </h1>

                {{-- Description --}}
                <p class="animate-fade-in-up delay-300 text-lg sm:text-xl text-text-light/70 max-w-lg mx-auto mb-12 leading-relaxed">
                    Nuestro sitio web se encuentra en mantenimiento programado.
                    Volveremos pronto con mejoras para servirte mejor.
                </p>

                {{-- System Status Card --}}
                <output class="animate-fade-in-up delay-400 block"
                        aria-label="Estado actual del sistema">

                    <div class="relative backdrop-blur-xl bg-white/6 border border-white/8 rounded-2xl p-6 sm:p-8 max-w-md mx-auto shadow-2xl">

                        {{-- Card header --}}
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-sm font-bold uppercase tracking-wider text-text-light/60">
                                Estado del Sistema
                            </h2>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary/15 text-primary text-xs font-bold">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse" aria-hidden="true"></span>
                                En progreso
                            </span>
                        </div>

                        {{-- Status items --}}
                        <ul class="space-y-4 text-left" aria-label="Detalle de servicios">
                            {{-- Sitio Web --}}
                            <li class="flex items-center justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-lg text-primary">language</span>
                                    </div>
                                    <span class="text-sm font-medium text-text-light/80">Sitio Web</span>
                                </div>
                                <span class="text-xs font-bold text-primary px-2.5 py-1 rounded-full bg-primary/10">
                                    Actualizando
                                </span>
                            </li>

                            {{-- Base de Datos --}}
                            <li class="flex items-center justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-lg text-green-400">database</span>
                                    </div>
                                    <span class="text-sm font-medium text-text-light/80">Base de Datos</span>
                                </div>
                                <span class="text-xs font-bold text-green-400 px-2.5 py-1 rounded-full bg-green-500/10">
                                    Operativa
                                </span>
                            </li>

                            {{-- Servicios --}}
                            <li class="flex items-center justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center">
                                        <span class="material-symbols-outlined text-lg text-green-400">cloud</span>
                                    </div>
                                    <span class="text-sm font-medium text-text-light/80">Servicios en la Nube</span>
                                </div>
                                <span class="text-xs font-bold text-green-400 px-2.5 py-1 rounded-full bg-green-500/10">
                                    Operativo
                                </span>
                            </li>
                        </ul>

                        {{-- Progress bar --}}
                        <div class="mt-6 pt-6 border-t border-white/6"
                             x-data="{ progress: 0 }"
                             x-init="setTimeout(() => progress = 75, 500)"
                             aria-label="Progreso del mantenimiento">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs font-medium text-text-light/50">Progreso estimado</span>
                                <span class="text-xs font-bold text-primary" x-text="progress + '%'">0%</span>
                            </div>
                            <progress class="sr-only" :value="progress" max="100" x-text="progress + '%'">0%</progress>
                            <div class="w-full h-2 rounded-full bg-white/6 overflow-hidden" aria-hidden="true">
                                <div class="h-full rounded-full bg-linear-to-r from-primary to-[#f0c050] transition-all duration-1000 ease-out"
                                     :style="'width: ' + progress + '%'"></div>
                            </div>
                        </div>
                    </div>
                </output>

                {{-- Contact info --}}
                <div class="animate-fade-in-up delay-500 mt-10 space-y-4">
                    <p class="text-sm text-text-light/40">
                        ¿Necesitas ayuda urgente? Contáctanos:
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-4">
                        <a href="tel:+50422001234"
                           class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white/6 border border-white/8 text-text-light/70 hover:text-primary hover:border-primary/30 hover:bg-primary/5 transition-all text-sm font-medium"
                           aria-label="+504 2200-1234, llamar a la parroquia">
                            <span class="material-symbols-outlined text-lg" aria-hidden="true">phone</span>
                            +504 2200-1234
                        </a>
                        <a href="mailto:info@cristoresucitado.hn"
                           class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white/6 border border-white/8 text-text-light/70 hover:text-primary hover:border-primary/30 hover:bg-primary/5 transition-all text-sm font-medium"
                           aria-label="info@cristoresucitado.hn, enviar correo">
                            <span class="material-symbols-outlined text-lg">mail</span>
                            info@cristoresucitado.hn
                        </a>
                    </div>
                </div>

                {{-- Countdown / ETA --}}
                <div class="animate-fade-in-up delay-700 mt-12"
                     x-data="countdown()"
                     x-init="init()"
                     aria-label="Tiempo estimado de regreso">
                    <p class="text-xs text-text-light/30 uppercase tracking-widest mb-4 font-medium">
                        Tiempo estimado de regreso
                    </p>
                    <div class="inline-flex items-center gap-3 sm:gap-4">
                        <template x-for="unit in units" :key="unit.label">
                            <div class="flex items-center gap-3 sm:gap-4">
                                <div class="flex flex-col items-center">
                                    <span class="text-2xl sm:text-3xl font-black text-text-light tabular-nums"
                                          x-text="String(unit.value).padStart(2, '0')">00</span>
                                    <span class="text-[0.65rem] uppercase tracking-wider text-text-light/30 mt-1"
                                          x-text="unit.label"></span>
                                </div>
                                <span class="text-text-light/20 text-xl font-light last:hidden" x-show="unit.label !== 'seg'" aria-hidden="true">:</span>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="py-6 text-center" role="contentinfo">
        <p class="text-xs text-text-light/25">
            &copy; {{ date('Y') }} Parroquia Cristo Resucitado. Todos los derechos reservados.
        </p>
    </footer>

    {{-- Countdown Alpine component --}}
    <script>
        function countdown() {
            return {
                units: [
                    { label: 'horas', value: 0 },
                    { label: 'min', value: 0 },
                    { label: 'seg', value: 0 },
                ],
                targetDate: null,
                init() {
                    // Set target to 4 hours from now (adjustable)
                    this.targetDate = new Date(Date.now() + 4 * 60 * 60 * 1000);
                    this.tick();
                    setInterval(() => this.tick(), 1000);
                },
                tick() {
                    const diff = Math.max(0, this.targetDate - Date.now());
                    const totalSeconds = Math.floor(diff / 1000);
                    this.units[0].value = Math.floor(totalSeconds / 3600);
                    this.units[1].value = Math.floor((totalSeconds % 3600) / 60);
                    this.units[2].value = totalSeconds % 60;
                },
            };
        }
    </script>
</body>
</html>
