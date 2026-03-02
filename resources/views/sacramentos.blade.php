<x-layouts.app title="Sacramentos y Requisitos | Parroquia Cristo Resucitado" description="Guía completa de sacramentos y requisitos en la Parroquia Cristo Resucitado">

    <div class="flex flex-col items-center w-full">
        <div class="layout-content-container flex flex-col max-w-[960px] w-full px-4 md:px-6 py-8">

            {{-- Breadcrumbs --}}
            <div class="flex flex-wrap gap-2 py-4">
                <a class="text-gray-500 text-sm font-medium leading-normal hover:text-text-dark" href="{{ route('home') }}">Inicio</a>
                <span class="text-gray-500 text-sm font-medium leading-normal">/</span>
                <span class="text-text-dark dark:text-white text-sm font-medium leading-normal">Sacramentos</span>
            </div>

            {{-- Hero Title --}}
            <div class="flex flex-col gap-4 py-8 text-center md:text-left">
                <h1 class="text-text-dark dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-tight">Sacramentos y Requisitos</h1>
                <p class="text-gray-500 text-lg font-normal leading-relaxed max-w-[720px]">
                    Los sacramentos son signos eficaces de la gracia, instituidos por Cristo y confiados a la Iglesia, por los cuales se nos dispensa la vida divina. Aquí encontrarás una guía completa para su celebración en nuestra comunidad.
                </p>
            </div>

            {{-- Quick Navigation --}}
            <div class="flex gap-3 overflow-x-auto pb-6 no-scrollbar snap-x">
                <a class="snap-start shrink-0 px-4 py-2 rounded-full border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-primary/10 hover:text-primary hover:border-primary transition-all" href="#bautismo">Bautismo</a>
                <a class="snap-start shrink-0 px-4 py-2 rounded-full border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-primary/10 hover:text-primary hover:border-primary transition-all" href="#confirmacion">Confirmación</a>
                <a class="snap-start shrink-0 px-4 py-2 rounded-full border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-primary/10 hover:text-primary hover:border-primary transition-all" href="#eucaristia">Eucaristía</a>
                <a class="snap-start shrink-0 px-4 py-2 rounded-full border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-primary/10 hover:text-primary hover:border-primary transition-all" href="#matrimonio">Matrimonio</a>
                <a class="snap-start shrink-0 px-4 py-2 rounded-full border border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-primary/10 hover:text-primary hover:border-primary transition-all" href="#reconciliacion">Reconciliación</a>
            </div>

            <hr class="border-t border-gray-200 my-6"/>

            {{-- Bautismo Section --}}
            <section class="flex flex-col gap-8 py-10 scroll-mt-20" id="bautismo">
                <div class="flex flex-col md:flex-row justify-between items-start gap-6">
                    <div class="flex flex-col gap-3 max-w-[600px]">
                        <div class="flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined">water_drop</span>
                            <span class="uppercase tracking-widest text-xs font-bold">Iniciación Cristiana</span>
                        </div>
                        <h2 class="text-text-dark dark:text-white text-3xl font-bold leading-tight">Bautismo</h2>
                        <p class="text-text-dark dark:text-gray-300 text-base font-normal leading-relaxed">
                            El fundamento de toda la vida cristiana, el pórtico de la vida en el espíritu y la puerta que abre el acceso a los otros sacramentos. Por el Bautismo somos liberados del pecado y regenerados como hijos de Dios.
                        </p>
                    </div>
                    <a href="{{ route('contacto') }}" class="shrink-0 flex items-center justify-center overflow-hidden rounded-lg h-10 px-6 bg-primary text-white text-sm font-bold shadow-sm hover:bg-primary/90 transition-colors">
                        Agendar Bautismo
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="flex flex-col gap-3 rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
                            <span class="material-symbols-outlined">description</span>
                        </div>
                        <h3 class="text-text-dark dark:text-white text-base font-bold">Acta de Nacimiento</h3>
                        <p class="text-gray-500 text-sm">Copia original reciente del registro civil del niño(a).</p>
                    </div>
                    <div class="flex flex-col gap-3 rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
                            <span class="material-symbols-outlined">school</span>
                        </div>
                        <h3 class="text-text-dark dark:text-white text-base font-bold">Charla Pre-bautismal</h3>
                        <p class="text-gray-500 text-sm">Asistencia obligatoria para padres y padrinos. Se imparte el primer sábado de mes.</p>
                    </div>
                    <div class="flex flex-col gap-3 rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
                            <span class="material-symbols-outlined">diversity_3</span>
                        </div>
                        <h3 class="text-text-dark dark:text-white text-base font-bold">Padrinos</h3>
                        <p class="text-gray-500 text-sm">Deben ser católicos confirmados. Si viven en pareja, deben estar casados por la Iglesia.</p>
                    </div>
                </div>
            </section>

            <hr class="border-t border-gray-200/60"/>

            {{-- Confirmación Section --}}
            <section class="flex flex-col gap-8 py-10 scroll-mt-20" id="confirmacion">
                <div class="flex flex-col md:flex-row justify-between items-start gap-6">
                    <div class="flex flex-col gap-3 max-w-[600px]">
                        <div class="flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined">local_fire_department</span>
                            <span class="uppercase tracking-widest text-xs font-bold">Iniciación Cristiana</span>
                        </div>
                        <h2 class="text-text-dark dark:text-white text-3xl font-bold leading-tight">Confirmación</h2>
                        <p class="text-text-dark dark:text-gray-300 text-base font-normal leading-relaxed">
                            Con el Bautismo y la Eucaristía, el sacramento de la Confirmación constituye el conjunto de los "sacramentos de la iniciación cristiana". Enriquece a los bautizados con una fuerza especial del Espíritu Santo.
                        </p>
                    </div>
                    <a href="{{ route('contacto') }}" class="shrink-0 flex items-center justify-center overflow-hidden rounded-lg h-10 px-6 bg-white border border-gray-200 text-text-dark text-sm font-bold shadow-sm hover:bg-gray-50 transition-colors">
                        Ver Fechas de Catequesis
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-start gap-4 rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 p-5">
                        <div class="text-primary mt-1"><span class="material-symbols-outlined">history_edu</span></div>
                        <div>
                            <h3 class="text-text-dark dark:text-white text-base font-bold">Fe de Bautismo</h3>
                            <p class="text-gray-500 text-sm mt-1">Certificado reciente y actualizado.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 p-5">
                        <div class="text-primary mt-1"><span class="material-symbols-outlined">groups</span></div>
                        <div>
                            <h3 class="text-text-dark dark:text-white text-base font-bold">Curso de Catequesis</h3>
                            <p class="text-gray-500 text-sm mt-1">Completar el programa de preparación (duración 1 año).</p>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="border-t border-gray-200/60"/>

            {{-- Matrimonio Section --}}
            <section class="flex flex-col gap-8 py-10 scroll-mt-20" id="matrimonio">
                <div class="flex flex-col md:flex-row justify-between items-start gap-6">
                    <div class="flex flex-col gap-3 max-w-[600px]">
                        <div class="flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined">favorite</span>
                            <span class="uppercase tracking-widest text-xs font-bold">Servicio a la Comunidad</span>
                        </div>
                        <h2 class="text-text-dark dark:text-white text-3xl font-bold leading-tight">Matrimonio</h2>
                        <p class="text-text-dark dark:text-gray-300 text-base font-normal leading-relaxed">
                            La alianza matrimonial, por la que el varón y la mujer constituyen entre sí un consorcio de toda la vida, ordenado por su misma índole natural al bien de los cónyuges y a la generación y educación de la prole.
                        </p>
                    </div>
                    <a href="{{ route('contacto') }}" class="shrink-0 flex items-center justify-center overflow-hidden rounded-lg h-10 px-6 bg-primary text-white text-sm font-bold shadow-sm hover:bg-primary/90 transition-colors">
                        Información de Bodas
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="flex flex-col gap-3 rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
                            <span class="material-symbols-outlined">folder_shared</span>
                        </div>
                        <h3 class="text-text-dark dark:text-white text-base font-bold">Partidas de Bautismo</h3>
                        <p class="text-gray-500 text-sm">De ambos contrayentes. Deben ser recientes (menos de 6 meses) y legalizadas por la diócesis.</p>
                    </div>
                    <div class="flex flex-col gap-3 rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
                            <span class="material-symbols-outlined">handshake</span>
                        </div>
                        <h3 class="text-text-dark dark:text-white text-base font-bold">Curso Prematrimonial</h3>
                        <p class="text-gray-500 text-sm">Certificado de finalización del curso de preparación para la vida conyugal.</p>
                    </div>
                    <div class="flex flex-col gap-3 rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 p-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="size-10 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-2">
                            <span class="material-symbols-outlined">calendar_month</span>
                        </div>
                        <h3 class="text-text-dark dark:text-white text-base font-bold">Entrevista Pastoral</h3>
                        <p class="text-gray-500 text-sm">Programar entrevista con el Párroco al menos 6 meses antes de la fecha deseada.</p>
                    </div>
                </div>
            </section>

            <hr class="border-t border-gray-200/60"/>

            {{-- Otros Sacramentos Section --}}
            <section class="py-10 w-full">
                <h2 class="text-text-dark dark:text-white text-2xl font-bold mb-8">Otros Sacramentos y Servicios</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- Primera Comunión --}}
                    <div class="flex flex-col rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 overflow-hidden" id="eucaristia">
                        <div class="bg-primary/5 p-6 border-b border-gray-200/50">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary">emoji_food_beverage</span>
                                <h3 class="text-lg font-bold text-text-dark dark:text-white">Primera Comunión</h3>
                            </div>
                            <p class="text-gray-500 text-sm">El sacramento en el que recibimos el Cuerpo y la Sangre de Cristo.</p>
                        </div>
                        <div class="p-6 flex flex-col gap-2">
                            <p class="text-xs font-bold uppercase tracking-wider text-gray-500 mb-1">Requisitos</p>
                            <ul class="list-disc list-inside text-sm text-text-dark dark:text-gray-300 space-y-1 marker:text-primary">
                                <li>Tener al menos 8 años cumplidos.</li>
                                <li>Haber cursado 2 años de catequesis.</li>
                                <li>Fe de Bautismo.</li>
                            </ul>
                        </div>
                    </div>
                    {{-- Reconciliación --}}
                    <div class="flex flex-col rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 overflow-hidden" id="reconciliacion">
                        <div class="bg-primary/5 p-6 border-b border-gray-200/50">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary">church</span>
                                <h3 class="text-lg font-bold text-text-dark dark:text-white">Reconciliación (Confesión)</h3>
                            </div>
                            <p class="text-gray-500 text-sm">El perdón de los pecados cometidos después del Bautismo.</p>
                        </div>
                        <div class="p-6 flex flex-col gap-2">
                            <p class="text-xs font-bold uppercase tracking-wider text-gray-500 mb-1">Horarios</p>
                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between text-sm text-text-dark dark:text-gray-300 border-b border-dashed border-gray-200 pb-1">
                                    <span>Jueves Eucarísticos</span>
                                    <span class="font-medium">5:00 PM - 7:00 PM</span>
                                </div>
                                <div class="flex justify-between text-sm text-text-dark dark:text-gray-300 pb-1">
                                    <span>Antes de cada Misa</span>
                                    <span class="font-medium">30 min antes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Unción de los Enfermos --}}
                    <div class="flex flex-col rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 overflow-hidden">
                        <div class="bg-primary/5 p-6 border-b border-gray-200/50">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary">healing</span>
                                <h3 class="text-lg font-bold text-text-dark dark:text-white">Unción de los Enfermos</h3>
                            </div>
                            <p class="text-gray-500 text-sm">Otorga consuelo, paz y ánimo. También perdona pecados si el enfermo no pudo confesarse.</p>
                        </div>
                        <div class="p-6 flex flex-col gap-2">
                            <p class="text-xs font-bold uppercase tracking-wider text-gray-500 mb-1">Contacto de Urgencia</p>
                            <p class="text-sm text-text-dark dark:text-gray-300">Para solicitar la visita de un sacerdote a un enfermo grave o anciano:</p>
                            <a class="flex items-center gap-2 text-primary font-bold text-sm mt-1 hover:underline" href="tel:+50412345678">
                                <span class="material-symbols-outlined text-lg">call</span>
                                Llamar a Oficina Parroquial
                            </a>
                        </div>
                    </div>
                    {{-- Vocaciones --}}
                    <div class="flex flex-col rounded-xl border border-gray-200 bg-white dark:bg-zinc-900 overflow-hidden">
                        <div class="bg-primary/5 p-6 border-b border-gray-200/50">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary">volunteer_activism</span>
                                <h3 class="text-lg font-bold text-text-dark dark:text-white">Vocaciones</h3>
                            </div>
                            <p class="text-gray-500 text-sm">¿Sientes el llamado a servir a Dios? El Orden Sacerdotal consagra a hombres al servicio de la Iglesia.</p>
                        </div>
                        <div class="p-6 flex flex-col gap-2 h-full justify-between">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-wider text-gray-500 mb-1">Información</p>
                                <p class="text-sm text-text-dark dark:text-gray-300">Acércate al párroco para un acompañamiento vocacional o visita el seminario diocesano.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- CTA Section --}}
            <section class="w-full mt-10 mb-10">
                <div class="relative overflow-hidden rounded-2xl bg-background-dark p-8 md:p-12 text-center">
                    <div class="relative z-10 flex flex-col items-center gap-4">
                        <h2 class="text-white text-2xl md:text-3xl font-bold">¿Tienes dudas sobre tu proceso?</h2>
                        <p class="text-gray-300 max-w-lg">
                            Nuestra secretaría parroquial está disponible para ayudarte a revisar tus documentos y guiarte en cada paso.
                        </p>
                        <div class="flex gap-4 mt-2">
                            <a href="{{ route('contacto') }}" class="flex h-12 items-center justify-center rounded-lg bg-primary px-6 font-bold text-white transition-colors hover:bg-primary/90">
                                Contactar Secretaría
                            </a>
                        </div>
                    </div>
                    <div class="absolute -top-24 -left-24 h-64 w-64 rounded-full bg-white/5 blur-3xl"></div>
                    <div class="absolute -bottom-24 -right-24 h-64 w-64 rounded-full bg-primary/20 blur-3xl"></div>
                </div>
            </section>

        </div>
    </div>

</x-layouts.app>
