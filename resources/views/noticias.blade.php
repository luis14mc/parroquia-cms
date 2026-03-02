<x-layouts.app title="Noticias y Blog | Parroquia Cristo Resucitado" description="Mantente informado sobre las últimas actividades y anuncios de nuestra comunidad">

    <div class="w-full max-w-[1280px] mx-auto px-6 lg:px-10 py-8 flex flex-col gap-10">

        {{-- Page Title Area --}}
        <div class="flex flex-col gap-2">
            <h1 class="text-text-dark dark:text-white text-5xl font-black leading-tight tracking-tight">Noticias y Blog Parroquial</h1>
            <p class="text-gray-500 dark:text-gray-400 text-lg font-normal max-w-2xl">
                Mantente informado sobre las últimas actividades, reflexiones espirituales y anuncios importantes de nuestra comunidad en Honduras.
            </p>
        </div>

        {{-- Featured Article (Hero) --}}
        <div class="relative w-full rounded-2xl overflow-hidden group shadow-lg">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent z-10 transition-opacity duration-300"></div>
            <div class="h-[500px] w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAvULQk5S3bCIBpnlxPGK3kpPAbymVYcLuIovvw4GIYdQEg0h48M6cgBeima9FKsZHxdcgqiwKtX1GtCrT9dyQA6IGz9xMT0F4QLAU44EGlZQ5Og5JyepHdo0pZlZ_nFxVCU6CY8gDoeUCn7zVL5saV9IGycHy4G3V1tmt086ubkU_UDiAYAklIkewRZzhmnsC7JojXEwLXxocIkfqgNcX6Ii8Vq2S8BjD2MxfZ34ePGNkZAM0weYSzk9wKfzCZaMTsRftH_QQ3VXY');"></div>
            <div class="absolute bottom-0 left-0 z-20 p-8 md:p-12 w-full md:w-3/4 lg:w-2/3">
                <span class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-wider text-black uppercase bg-primary rounded-full">Destacado</span>
                <h2 class="text-3xl md:text-5xl font-black text-white leading-tight mb-4 drop-shadow-md">
                    Celebración Solemne de la Semana Santa 2024
                </h2>
                <p class="text-white/90 text-base md:text-lg font-medium mb-6 line-clamp-2 md:line-clamp-none drop-shadow-sm">
                    Revive los momentos más sagrados de nuestra última Semana Mayor, donde la comunidad se unió en fe y devoción a través de las procesiones y liturgias.
                </p>
                <button class="bg-white hover:bg-gray-100 text-text-dark font-bold py-3 px-6 rounded-lg transition-colors flex items-center gap-2">
                    Leer Artículo Completo
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </button>
            </div>
        </div>

        {{-- Filters & Categories --}}
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 py-4 border-b border-gray-200 dark:border-gray-700">
            <h3 class="text-2xl font-bold text-text-dark dark:text-white">Últimas Publicaciones</h3>
            <div class="flex flex-wrap gap-2">
                <button class="px-4 py-2 rounded-full bg-text-dark text-white text-sm font-medium transition hover:opacity-90 dark:bg-white dark:text-text-dark">Todas</button>
                <button class="px-4 py-2 rounded-full bg-gray-100 text-text-dark text-sm font-medium hover:bg-primary/20 transition dark:bg-white/5 dark:text-gray-300 dark:hover:bg-white/10">Comunidad</button>
                <button class="px-4 py-2 rounded-full bg-gray-100 text-text-dark text-sm font-medium hover:bg-primary/20 transition dark:bg-white/5 dark:text-gray-300 dark:hover:bg-white/10">Liturgia</button>
                <button class="px-4 py-2 rounded-full bg-gray-100 text-text-dark text-sm font-medium hover:bg-primary/20 transition dark:bg-white/5 dark:text-gray-300 dark:hover:bg-white/10">Juventud</button>
                <button class="px-4 py-2 rounded-full bg-gray-100 text-text-dark text-sm font-medium hover:bg-primary/20 transition dark:bg-white/5 dark:text-gray-300 dark:hover:bg-white/10">Voluntariado</button>
            </div>
        </div>

        {{-- News Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pb-16">
            @php
            $articles = [
                ['img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBvPLHto7C_gqjexsDl45JgI7BsK-Y_5f-VSXfsZqEGbUF5kt0I59TM5rINDekEtNftD2C9C9F2MBvuXd8gQMZZ1s6rvCjn5QZln9ZVaR4xxVtrR8lm3RK63K88QVvJh9wpCNu6sQxgNyAj2ezzP_FtsDSlOx9_WZpALbIwBOspaDAcz3jjOBZ-N0LWXvXOInADnrsznOBjSixjKjMhcESMYHeBI26MhSX8JGTY8-R1VxnLSOQV0rk9DFhk07S0lufGp4QvvI0avGM', 'cat' => 'Juventud', 'date' => '15 de Abril, 2024', 'title' => 'Retiro Espiritual de Jóvenes: "Luz en el Camino"', 'excerpt' => 'Más de 50 jóvenes de nuestra parroquia se reunieron este fin de semana para compartir experiencias, orar y fortalecer su fe en un ambiente de fraternidad.'],
                ['img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD8qD0gnDthg1Ga1SYjEk2lRxIA2pJMMSwv9sJ9ngrTTG9O2ZmmhBTxVmhAUL2vT8zu2OSJmkOG5Uqafum0QaTe3U5hu7bUsZrU1CBurPQFt4La3s-3Kd_SxfgQVXhH5TX1Ghd6OBRdREvnTScfFe1V38u1vpA2IH9f7_T6sZJyI_urKvhmtx2riQmGCV4aeGaiPIqbcp9eDYjQOUFHDY3IS03l-I8RiDaG1YWfB_0C7WJy-WFkdS8lDZXwz2N4qkTI8cNFDyfxHwQ', 'cat' => 'Comunidad', 'date' => '10 de Abril, 2024', 'title' => 'Jornada de Donación de Alimentos', 'excerpt' => 'Gracias a la generosidad de nuestros feligreses, logramos recolectar y distribuir más de 200 canastas básicas a familias necesitadas del sector.'],
                ['img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCzoNY_crXMh5vUsTrK9h6viKYN6JwJooWgBMS5sVDizzFWB-5zKEmDgS07P8UlD3NLTj5st4vBML7MImwsDEJFw8RQ0dOzaNP8dIq54AYhLZRvuzTDs6p22H2YXUCvmaNoU1m4S1QzjYdFU8yAf5gNyloPgOJJJxAiYkxjoQQuPBnOfzYWvgZ4CRNpSX3c9s_pOOpZGNVpOuJY9ZT-RAZ0yKiRDsMimbm2yjKmltSyZTToDgEMRCaHixFy9-ISRs0_RVky1fIrpjM', 'cat' => 'Liturgia', 'date' => '05 de Abril, 2024', 'title' => 'Nuevos Horarios de Misa Dominical', 'excerpt' => 'A partir del próximo mes, ajustaremos los horarios de las eucaristías para acomodar mejor a nuestra creciente comunidad de fieles.'],
                ['img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBWGvr648J2n3T-tZrJ0qY3N0YzSO4TcC3YuHjJG6jZySct4iY-VqhvbA1rSH6zUZ_FntAbHXhSFusY52xF56u4pil1LDWHI-dq0eX2YB6u6rMGKJWb1qWVy2CZ2fGSMom5PGcsfioY7yS4tMaPcxcVRsO34VBNK7H_Is46FNeNF9SYffYFrnnwQANOq90PEzRVdNKz_PXNjVbNby2As3VY-SacvBrE874EEXN0KfBCLS2fqdjnzD2mkxdaTMNjSnY9Qc05R_gjbOs', 'cat' => 'Voluntariado', 'date' => '28 de Marzo, 2024', 'title' => 'Restauración del Templo Parroquial', 'excerpt' => 'Voluntarios de todas las edades se unieron este sábado para labores de limpieza y mantenimiento de nuestra amada iglesia.'],
                ['img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB6cSKT3cBjNSMa0XJFIXXScLKJtC5kYLIY12DOWq2E_j6s5gJZawyBJ-jmDVIH-TxRldIArTXt2YBZ1C8O6l7zbiORip1YOH4LigMltvR65BgeD9P_Dg7j1n-9Tk9u5Fx2H9ccl8y7FSYIXfFMBwvLmjtHGtRYB5_ewBktapLGeX0k2EpEARygL7-kJB_pzEFF7Zd2UJFRu6Sf0jk6SgKlc80Us8uEZMLq-YawaYGhYjmP8ybJ1NohUzXwub6mna7BESlVZYLGOao', 'cat' => 'Reflexión', 'date' => '25 de Marzo, 2024', 'title' => 'Mensaje del Párroco: La Esperanza', 'excerpt' => 'Una reflexión profunda sobre el significado de la esperanza en tiempos difíciles y cómo podemos ser luz para los demás.'],
                ['img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAbllLl91F7NXjiZM9OTr4bC9_ftmTvN4dR7WG44p4Sb0CVoNp9nR7XS7PPqCLMkXznhQ0btxLigQEKJUhXVEYUTJPCFCMXhRFyGspfWZ-3rUre6RHL0PoEwuLO1tlDEtK-nROkTK-pdqw-yXaW7kXSiw625oYCQ2793TRQQfx8Ej3qT7Ldl-wP0zRb_hvvCIEzhJ0sWp55To1KjYHURLl4TnFLDSH7pzbwCorsjO0Pz9SIkLkGXycHYXmld_C2GKNcYrQUNxYYzfo', 'cat' => 'Comunidad', 'date' => '20 de Marzo, 2024', 'title' => 'Festival Familiar Parroquial', 'excerpt' => 'Un día de convivencia, juegos y actividades para todas las familias de nuestra comunidad parroquial.'],
            ];
            @endphp

            @foreach($articles as $article)
            <article class="flex flex-col gap-4 group cursor-pointer">
                <div class="relative aspect-[4/3] w-full overflow-hidden rounded-xl bg-gray-100">
                    <img alt="{{ $article['title'] }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ $article['img'] }}" loading="lazy">
                    <div class="absolute top-4 left-4">
                        <span class="bg-primary text-text-dark text-xs font-bold px-3 py-1 rounded-full shadow-sm">{{ $article['cat'] }}</span>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-2 text-xs text-gray-500 font-medium uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[16px] align-middle">calendar_today</span>
                        {{ $article['date'] }}
                    </div>
                    <h3 class="text-xl font-bold text-text-dark dark:text-white group-hover:text-primary transition-colors leading-tight">
                        {{ $article['title'] }}
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3">{{ $article['excerpt'] }}</p>
                    <a class="inline-flex items-center text-primary text-sm font-bold mt-2 hover:underline" href="#">
                        Leer Más <span class="material-symbols-outlined text-[16px] ml-1">arrow_right_alt</span>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

    </div>

</x-layouts.app>
