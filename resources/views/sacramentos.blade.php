<x-layouts.app title="Sacramentos | Parroquia Cristo Resucitado" description="Conoce los sacramentos que celebramos en nuestra parroquia: Bautismo, Primera Comunión, Confirmación, Matrimonio y más.">
    
    {{-- Hero Section --}}
    <x-hero-section 
        title="Los <span class='text-primary'>Sacramentos</span>"
        subtitle="Los sacramentos son signos eficaces de la gracia, instituidos por Cristo y confiados a la Iglesia, por los cuales nos es dispensada la vida divina."
        image="https://images.unsplash.com/photo-1504052434569-70ad5836ab65?w=1920&q=80"
        size="md"
    />

    {{-- Sacramento Cards Grid --}}
    <section class="py-16 lg:py-24 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header 
                label="Vida Sacramental"
                title="Sacramento de Iniciación Cristiana"
            />

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Bautismo --}}
                <article id="bautismo" class="card overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=600&q=80" 
                             alt="Bautismo" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-2xl text-primary">water_drop</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Bautismo</h3>
                        <p class="text-text-muted mb-4">
                            El Bautismo es el fundamento de toda la vida cristiana. Por el Bautismo somos liberados del pecado y regenerados como hijos de Dios.
                        </p>
                        <h4 class="font-semibold text-text-dark dark:text-text-light mb-2">Requisitos:</h4>
                        <ul class="text-sm text-text-muted space-y-1 mb-4">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span>
                                Acta de nacimiento del niño
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span>
                                Fe de bautismo de padrinos
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span>
                                Plática pre-bautismal
                            </li>
                        </ul>
                        <a href="{{ route('contacto') }}" class="btn-primary w-full justify-center">
                            Solicitar Información
                        </a>
                    </div>
                </article>

                {{-- Primera Comunión --}}
                <article id="comunion" class="card overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1609234656388-0ff363383899?w=600&q=80" 
                             alt="Primera Comunión" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-2xl text-primary">menu_book</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Primera Comunión</h3>
                        <p class="text-text-muted mb-4">
                            Es el momento en que el niño recibe por primera vez el Cuerpo y la Sangre de Cristo en la Eucaristía, después de una adecuada preparación.
                        </p>
                        <h4 class="font-semibold text-text-dark dark:text-text-light mb-2">Requisitos:</h4>
                        <ul class="text-sm text-text-muted space-y-1 mb-4">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span>
                                Estar bautizado
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span>
                                Dos años de catequesis
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span>
                                Tener al menos 9 años
                            </li>
                        </ul>
                        <a href="{{ route('contacto') }}" class="btn-primary w-full justify-center">
                            Solicitar Información
                        </a>
                    </div>
                </article>

                {{-- Confirmación --}}
                <article id="confirmacion" class="card overflow-hidden group">
                    <div class="aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519682337058-a94d519337bc?w=600&q=80" 
                             alt="Confirmación" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                    </div>
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-2xl text-primary">spa</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Confirmación</h3>
                        <p class="text-text-muted mb-4">
                            La Confirmación perfecciona la gracia bautismal. Por este sacramento el bautizado se fortalece con el don del Espíritu Santo.
                        </p>
                        <h4 class="font-semibold text-text-dark dark:text-text-light mb-2">Requisitos:</h4>
                        <ul class="text-sm text-text-muted space-y-1 mb-4">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span>
                                Estar bautizado y haber hecho Primera Comunión
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span>
                                Un año de catequesis
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm mt-0.5">check</span>
                                Tener al menos 14 años
                            </li>
                        </ul>
                        <a href="{{ route('contacto') }}" class="btn-primary w-full justify-center">
                            Solicitar Información
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- Matrimonio Section --}}
    <section id="matrimonio" class="py-16 lg:py-24 bg-white dark:bg-zinc-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=800&q=80" 
                             alt="Matrimonio" 
                             class="w-full h-full object-cover"
                             loading="lazy">
                    </div>
                </div>

                <div>
                    <x-section-header 
                        label="Sacramento del Amor"
                        title="Matrimonio"
                        :centered="false"
                    />

                    <p class="text-text-muted mb-6">
                        El matrimonio es la alianza por la cual un hombre y una mujer constituyen una comunidad de vida, ordenada al bien de los cónyuges y a la procreación y educación de los hijos.
                    </p>

                    <h4 class="font-semibold text-text-dark dark:text-text-light mb-3">Requisitos:</h4>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary">check_circle</span>
                            <span class="text-text-muted">Acta de nacimiento de ambos contrayentes</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary">check_circle</span>
                            <span class="text-text-muted">Fe de bautismo reciente (no mayor a 6 meses)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary">check_circle</span>
                            <span class="text-text-muted">Constancia de soltería</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary">check_circle</span>
                            <span class="text-text-muted">Curso de preparación pre-matrimonial</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary">check_circle</span>
                            <span class="text-text-muted">Pláticas con el sacerdote</span>
                        </li>
                    </ul>

                    <a href="{{ route('contacto') }}" class="btn-primary">
                        <span class="material-symbols-outlined">favorite</span>
                        Agenda tu Cita
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Other Sacraments --}}
    <section class="py-16 lg:py-24 bg-background-light dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-header 
                label="Otros Sacramentos"
                title="Sacramentos de Curación y Servicio"
            />

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                {{-- Confesión --}}
                <div class="card p-8">
                    <div class="w-14 h-14 rounded-full bg-secondary/10 flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-3xl text-secondary">healing</span>
                    </div>
                    <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Confesión</h3>
                    <p class="text-text-muted mb-4">
                        Sacramento de la reconciliación con Dios y con la Iglesia. Nos ofrece el perdón de los pecados cometidos después del Bautismo.
                    </p>
                    <div class="bg-primary/5 dark:bg-primary/10 rounded-lg p-4">
                        <p class="text-sm font-medium text-text-dark dark:text-text-light">Horario de Confesiones:</p>
                        <p class="text-sm text-text-muted">Sábados de 4:00 PM a 5:30 PM</p>
                        <p class="text-sm text-text-muted">O con cita previa</p>
                    </div>
                </div>

                {{-- Unción de los Enfermos --}}
                <div class="card p-8">
                    <div class="w-14 h-14 rounded-full bg-secondary/10 flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-3xl text-secondary">local_hospital</span>
                    </div>
                    <h3 class="text-xl font-bold text-text-dark dark:text-text-light mb-3">Unción de los Enfermos</h3>
                    <p class="text-text-muted mb-4">
                        Este sacramento confiere al enfermo la gracia del Espíritu Santo, que ayuda a todo el hombre para su salvación, lo conforta con la confianza en Dios.
                    </p>
                    <div class="bg-primary/5 dark:bg-primary/10 rounded-lg p-4">
                        <p class="text-sm font-medium text-text-dark dark:text-text-light">Disponible:</p>
                        <p class="text-sm text-text-muted">Llámenos en cualquier momento para urgencias</p>
                        <p class="text-sm text-primary font-medium">Tel: +504 2200-1234</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <x-cta-section 
        variant="secondary"
        title="¿Tienes preguntas sobre los sacramentos?"
        description="Estamos aquí para orientarte en tu camino de fe."
        cta-text="Contáctanos"
        cta-url="{{ route('contacto') }}"
    />

</x-layouts.app>
