<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Parroquia Cristo Resucitado - En Mantenimiento</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes pulse-ring {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(227, 168, 34, 0.5); }
            70% { transform: scale(1); box-shadow: 0 0 0 18px rgba(227, 168, 34, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(227, 168, 34, 0); }
        }
        .pulse-ring { animation: pulse-ring 2.5s ease-in-out infinite; }

        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .spin-slow { animation: spin-slow 8s linear infinite; }

        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in-up { animation: fade-in-up 0.7s ease-out forwards; }
        .delay-100 { animation-delay: 0.1s; opacity: 0; }
        .delay-200 { animation-delay: 0.2s; opacity: 0; }
        .delay-300 { animation-delay: 0.3s; opacity: 0; }
        .delay-400 { animation-delay: 0.4s; opacity: 0; }
        .delay-500 { animation-delay: 0.5s; opacity: 0; }
    </style>
</head>
<body class="bg-background-light font-display text-text-dark min-h-screen flex flex-col overflow-x-hidden">

    <!-- Header -->
    <header class="sticky top-0 z-50 w-full bg-white border-b border-gray-100 shadow-sm">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <img src="/images/logos/Logo_PCR.png" alt="Parroquia Cristo Resucitado" class="h-12 w-auto object-contain"/>
                </div>
                <!-- Estado de mantenimiento -->
                <div class="flex items-center gap-2 px-4 py-2 bg-secondary/10 rounded-full">
                    <span class="w-2 h-2 bg-secondary rounded-full inline-block animate-pulse"></span>
                    <span class="text-sm font-semibold text-secondary hidden sm:inline">Sitio en mantenimiento</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Main content -->
    <main class="flex-grow flex items-center justify-center px-4 py-16 sm:py-24 relative overflow-hidden">

        <!-- Decoración de fondo -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-secondary/5 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/3 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 max-w-2xl mx-auto text-center">

            <!-- Icono principal con anillo pulsante -->
            <div class="flex items-center justify-center mb-10 fade-in-up">
                <div class="relative">
                    <div class="pulse-ring w-28 h-28 rounded-full bg-primary/10 flex items-center justify-center">
                        <div class="w-20 h-20 rounded-full bg-primary/20 flex items-center justify-center">
                            <span class="material-symbols-outlined text-5xl text-primary">construction</span>
                        </div>
                    </div>
                    <!-- Cruz decorativa giratoria -->
                    <div class="absolute -top-3 -right-3 w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center spin-slow">
                        <span class="material-symbols-outlined text-xl text-secondary">church</span>
                    </div>
                </div>
            </div>

            <!-- Etiqueta -->
            <div class="fade-in-up delay-100 mb-6">
                <span class="inline-block px-4 py-1.5 text-xs font-bold tracking-widest text-secondary uppercase bg-secondary/10 rounded-full border border-secondary/20">
                    Sitio en mantenimiento
                </span>
            </div>

            <!-- Título principal -->
            <h2 class="fade-in-up delay-200 text-4xl sm:text-5xl lg:text-6xl font-black text-text-dark leading-tight tracking-tight mb-6">
                Estamos mejorando<br/>
                <span class="text-primary">para ti</span>
            </h2>

            <!-- Descripción -->
            <p class="fade-in-up delay-300 text-lg sm:text-xl text-gray-500 leading-relaxed mb-10 max-w-lg mx-auto">
                Nuestro sitio web se encuentra en mantenimiento programado. Estamos trabajando para ofrecerte una mejor experiencia. Volveremos pronto.
            </p>

            <!-- Tarjetas de información de contacto -->
            <div class="fade-in-up delay-400 grid grid-cols-1 sm:grid-cols-3 gap-4 mb-12">
                <div class="bg-white border border-gray-100 rounded-xl p-5 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center text-secondary mx-auto mb-3">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <h3 class="font-bold text-text-dark text-sm mb-1">Horario de Misas</h3>
                    <p class="text-xs text-gray-400">Lun–Vie 7:00 AM, 5:00 PM y 7:00 PM<br/>Sáb 7:00 AM y 5:30 PM<br/>Dom 9:15 AM y 11:00 AM, 5:00 PM y 7:00 PM</p>
                </div>
                <div class="bg-white border border-gray-100 rounded-xl p-5 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary mx-auto mb-3">
                        <span class="material-symbols-outlined">location_on</span>
                    </div>
                    <h3 class="font-bold text-text-dark text-sm mb-1">Ubicación</h3>
                    <p class="text-xs text-gray-400">Colonia Loarque<br/>Tegucigalpa, Honduras</p>
                </div>
                <div class="bg-white border border-gray-100 rounded-xl p-5 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 mx-auto mb-3">
                        <span class="material-symbols-outlined">call</span>
                    </div>
                    <h3 class="font-bold text-text-dark text-sm mb-1">Contáctanos</h3>
                    <p class="text-xs text-gray-400">+504 94306883<br/>info@parroquiacristoresucitado.hn</p>
                </div>
            </div>

            <!-- Mensaje espiritual -->
            <div class="fade-in-up delay-500 bg-gradient-to-r from-primary/5 via-primary/10 to-primary/5 border border-primary/20 rounded-2xl p-6 max-w-lg mx-auto">
                <span class="material-symbols-outlined text-primary text-3xl mb-3 block">format_quote</span>
                <p class="text-sm sm:text-base text-gray-600 italic leading-relaxed">
                    "Que la luz de Cristo Resucitado ilumine siempre sus caminos y fortalezca sus corazones."
                </p>
                <p class="text-xs text-gray-400 mt-3 font-semibold">— P. Javier Martinez, Párroco</p>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full bg-background-dark py-10">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <!-- Logo y nombre -->
                <div class="flex items-center gap-3">
                    <img src="/images/logos/Logo_PCR_Blanco.png" alt="Parroquia Cristo Resucitado" class="h-10 w-auto object-contain"/>
                </div>
                <!-- Redes sociales -->
                <div class="flex items-center gap-3">
                    <a href="#" class="w-9 h-9 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-text-dark transition-colors text-gray-400" aria-label="Facebook">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary hover:text-text-dark transition-colors text-gray-400" aria-label="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-6 text-center text-xs text-gray-500">
                <p>© {{ date('Y') }} Parroquia Cristo Resucitado. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

</body>
</html>
