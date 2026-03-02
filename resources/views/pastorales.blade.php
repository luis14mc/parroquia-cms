<x-layouts.app title="Pastorales | Parroquia Cristo Resucitado" description="Conoce los grupos pastorales de nuestra comunidad y únete a la misión evangelizadora.">

    {{-- Hero Section --}}
    <div class="relative w-full bg-text-dark text-white overflow-hidden py-16 md:py-24">
        <div class="absolute inset-0 z-0 opacity-20 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-gray-700 via-gray-900 to-black"></div>
        <div class="absolute inset-0 z-0 opacity-[0.08]" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        <div class="relative z-10 flex flex-col items-center justify-center px-4 md:px-10 text-center max-w-[1200px] mx-auto">
            <span class="mb-4 inline-flex items-center gap-1 rounded-full bg-white/10 px-3 py-1 text-xs font-medium text-white backdrop-blur-sm">
                <span class="material-symbols-outlined text-[16px]">groups</span>
                Grupos de Servicio
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black tracking-tight mb-6 max-w-3xl">
                Nuestras Pastorales
            </h1>
            <p class="text-gray-300 text-lg md:text-xl font-normal max-w-2xl leading-relaxed">
                Diversos grupos comprometidos con la misión evangelizadora de la Iglesia. Encuentra tu lugar para servir y crecer en la fe.
            </p>
        </div>
    </div>

    {{-- Pastorals Grid --}}
    <div class="max-w-[1200px] mx-auto px-4 py-12 md:py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-text-dark mb-3">Pastorales Activas</h2>
            <p class="text-gray-500 max-w-2xl mx-auto">Cada pastoral tiene una misión específica dentro de nuestra comunidad. Te invitamos a conocerlas y participar.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $pastorals = [
                ['icon' => 'volunteer_activism', 'title' => 'Cáritas Parroquial', 'desc' => 'Servicio a los más necesitados de nuestra comunidad a través de ayuda alimentaria, medicinas y acompañamiento.', 'schedule' => 'Sábados 9:00 AM', 'img' => 'https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?w=600&q=80', 'color' => 'primary'],
                ['icon' => 'diversity_3', 'title' => 'Pastoral Juvenil', 'desc' => 'Espacio para jóvenes de 15 a 30 años que buscan crecer en su fe y compartir con otros jóvenes cristianos.', 'schedule' => 'Viernes 7:00 PM', 'img' => 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600&q=80', 'color' => 'secondary'],
                ['icon' => 'auto_stories', 'title' => 'Catequesis', 'desc' => 'Formación en la fe para niños, jóvenes y adultos que se preparan para recibir los sacramentos.', 'schedule' => 'Sábados 2:00 PM', 'img' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&q=80', 'color' => 'primary'],
                ['icon' => 'music_note', 'title' => 'Coro Parroquial', 'desc' => 'Ministerio de música que anima las celebraciones litúrgicas con cantos y alabanzas al Señor.', 'schedule' => 'Miércoles 7:00 PM', 'img' => 'https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=600&q=80', 'color' => 'secondary'],
                ['icon' => 'church', 'title' => 'Ministros Extraordinarios', 'desc' => 'Laicos dedicados a llevar la Comunión a enfermos y ancianos que no pueden asistir a misa.', 'schedule' => 'Domingos después de misa', 'img' => 'https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=600&q=80', 'color' => 'primary'],
                ['icon' => 'family_restroom', 'title' => 'Pastoral Familiar', 'desc' => 'Acompañamiento a matrimonios y familias para fortalecer los vínculos a la luz del Evangelio.', 'schedule' => 'Sábados 4:00 PM', 'img' => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?w=600&q=80', 'color' => 'secondary'],
            ];
            @endphp

            @foreach($pastorals as $pastoral)
            <article class="group bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ $pastoral['img'] }}" alt="{{ $pastoral['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                </div>
                <div class="p-6">
                    <div class="w-12 h-12 rounded-full bg-{{ $pastoral['color'] }}/10 flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-2xl text-{{ $pastoral['color'] }}">{{ $pastoral['icon'] }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-text-dark mb-3">{{ $pastoral['title'] }}</h3>
                    <p class="text-gray-500 text-sm mb-4 leading-relaxed">{{ $pastoral['desc'] }}</p>
                    <div class="flex items-center gap-2 text-xs text-gray-500 mb-4">
                        <span class="material-symbols-outlined text-[16px]">schedule</span>
                        {{ $pastoral['schedule'] }}
                    </div>
                    <a href="{{ route('contacto') }}" class="inline-flex items-center justify-center w-full gap-2 px-4 py-2.5 rounded-lg border border-gray-200 text-text-dark text-sm font-medium hover:border-primary hover:text-primary transition-colors">
                        Unirse
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>

    {{-- CTA Section --}}
    <div class="w-full bg-text-dark text-white py-16 px-6">
        <div class="max-w-[960px] mx-auto text-center flex flex-col items-center gap-6">
            <h2 class="text-3xl font-bold">¿Listo para Servir?</h2>
            <p class="text-gray-300 max-w-lg">
                Contáctanos para saber más sobre cómo puedes participar en nuestras pastorales y ser parte activa de la misión.
            </p>
            <a href="{{ route('contacto') }}" class="px-8 py-3 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg transition-colors shadow-lg">
                Contáctanos
            </a>
        </div>
    </div>

</x-layouts.app>
