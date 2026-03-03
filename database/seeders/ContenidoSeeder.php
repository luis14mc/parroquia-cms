<?php

namespace Database\Seeders;

use App\Models\Contenido;
use Illuminate\Database\Seeder;

class ContenidoSeeder extends Seeder
{
    public function run(): void
    {
        $contenidos = [
            // ══════════════════════════════════════════════
            // HOME
            // ══════════════════════════════════════════════
            ['clave' => 'home.hero.titulo', 'seccion' => 'home', 'etiqueta' => 'Hero — Título', 'valor' => 'Una comunidad de fe, esperanza y amor', 'tipo' => 'texto'],
            ['clave' => 'home.hero.subtitulo', 'seccion' => 'home', 'etiqueta' => 'Hero — Subtítulo', 'valor' => 'Bienvenidos a la Parroquia Cristo Resucitado, un lugar donde cada persona encuentra el amor de Dios y una familia de fe.', 'tipo' => 'textarea'],
            ['clave' => 'home.hero.imagen', 'seccion' => 'home', 'etiqueta' => 'Hero — Imagen de fondo', 'valor' => 'https://lh3.googleusercontent.com/pw/AP1GczNxXxwL5GRXmF7sLvBGiGh-KWQYkgOPOhOSgexQ_3mYkAWu9MG43N-CPaNxT1M-UiG-0UVtLRpeFJljAY3WoXoGsJOIVfZWiFg1hG-8E-MhF5Wd=w2400', 'tipo' => 'imagen'],

            // Quick Info Bar
            ['clave' => 'home.info.proxima_misa', 'seccion' => 'home', 'etiqueta' => 'Info — Próxima Misa', 'valor' => 'Hoy, 6:00 PM', 'tipo' => 'texto'],
            ['clave' => 'home.info.direccion', 'seccion' => 'home', 'etiqueta' => 'Info — Dirección', 'valor' => 'Colonia Loarque, Tegucigalpa', 'tipo' => 'texto'],
            ['clave' => 'home.info.telefono', 'seccion' => 'home', 'etiqueta' => 'Info — Teléfono', 'valor' => '9430-6883', 'tipo' => 'texto'],

            // Mensaje del Párroco
            ['clave' => 'home.parroco.nombre', 'seccion' => 'home', 'etiqueta' => 'Párroco — Nombre', 'valor' => 'P. Javier', 'tipo' => 'texto'],
            ['clave' => 'home.parroco.cita', 'seccion' => 'home', 'etiqueta' => 'Párroco — Cita bíblica', 'valor' => '"Donde dos o tres se reúnen en mi nombre, allí estoy yo en medio de ellos." — Mateo 18:20', 'tipo' => 'texto'],
            ['clave' => 'home.parroco.mensaje', 'seccion' => 'home', 'etiqueta' => 'Párroco — Mensaje', 'valor' => 'Queridos hermanos y hermanas, les doy la más cordial bienvenida a nuestra comunidad parroquial. Cristo Resucitado es más que un templo; es una familia que camina junta en la fe. Aquí encontrarán un espacio para crecer espiritualmente, servir al prójimo y experimentar el amor de Dios. Los invito a participar activamente en nuestras celebraciones, grupos pastorales y actividades comunitarias.', 'tipo' => 'textarea'],
            ['clave' => 'home.parroco.imagen', 'seccion' => 'home', 'etiqueta' => 'Párroco — Foto', 'valor' => 'https://lh3.googleusercontent.com/pw/AP1GczPVyqXlDFp3x0bN6xqKp-K76HB_fFpDwxvm7oQHuXNDcBawwm0I5HZ0i42y2N4N3F-05h2bR8IabZxhLsjsG0eVXI-4FRDLZgR3kqbYLvjA6SyX=w2400', 'tipo' => 'imagen'],

            // Horarios
            ['clave' => 'home.horarios', 'seccion' => 'home', 'etiqueta' => 'Horarios de Misa (JSON)', 'valor' => json_encode([
                ['sede' => 'Sede Parroquial', 'horarios' => ['Martes a Sábado: 6:00 PM', 'Domingo: 8:00 AM, 10:00 AM, 5:00 PM']],
                ['sede' => 'Capilla Yaguacire', 'horarios' => ['Domingo: 9:00 AM']],
                ['sede' => 'Altos de Loarque', 'horarios' => ['Domingo: 10:30 AM']],
                ['sede' => 'Las Mercedes', 'horarios' => ['Sábado: 4:00 PM']],
                ['sede' => 'Camino Neo-catecumenal', 'horarios' => ['Sábado: 8:00 PM']],
            ], JSON_UNESCAPED_UNICODE), 'tipo' => 'json'],

            // Sacerdotes
            ['clave' => 'home.sacerdotes', 'seccion' => 'home', 'etiqueta' => 'Sacerdotes (JSON)', 'valor' => json_encode([
                ['nombre' => 'P. Javier Martínez', 'rol' => 'Párroco', 'bio' => 'Sacerdote con más de 15 años de servicio pastoral. Lidera nuestra comunidad con dedicación y amor desde 2017.', 'imagen' => 'https://lh3.googleusercontent.com/pw/AP1GczPVyqXlDFp3x0bN6xqKp-K76HB_fFpDwxvm7oQHuXNDcBawwm0I5HZ0i42y2N4N3F-05h2bR8IabZxhLsjsG0eVXI-4FRDLZgR3kqbYLvjA6SyX=w2400'],
                ['nombre' => 'P. Eduardo López', 'rol' => 'Vicario', 'bio' => 'Joven sacerdote comprometido con la formación de jóvenes y el acompañamiento espiritual de las familias.', 'imagen' => 'https://lh3.googleusercontent.com/pw/AP1GczNE0To1d6wLmmvJ1oqBfZrNpftgVUWxBhI9qgM7TE3MHkkcrE2v2qG5K5OcfAiZ57xEWuL4rdT2VKAX3tPPfGqDKA-nMLk9Ygt0XLFxgcKg-Py8=w2400'],
            ], JSON_UNESCAPED_UNICODE), 'tipo' => 'json'],

            // Intenciones WhatsApp
            ['clave' => 'home.whatsapp', 'seccion' => 'home', 'etiqueta' => 'WhatsApp número', 'valor' => '50494306883', 'tipo' => 'texto'],

            // CTA
            ['clave' => 'home.cta.titulo', 'seccion' => 'home', 'etiqueta' => 'CTA — Título', 'valor' => 'Apoya nuestra Misión', 'tipo' => 'texto'],
            ['clave' => 'home.cta.texto', 'seccion' => 'home', 'etiqueta' => 'CTA — Texto', 'valor' => 'Tu generosidad nos permite mantener nuestros programas pastorales, mejorar nuestras instalaciones y servir a quienes más lo necesitan en nuestra comunidad.', 'tipo' => 'textarea'],

            // ══════════════════════════════════════════════
            // NOSOTROS
            // ══════════════════════════════════════════════
            ['clave' => 'nosotros.hero.titulo', 'seccion' => 'nosotros', 'etiqueta' => 'Hero — Título', 'valor' => 'Nuestra Parroquia', 'tipo' => 'texto'],
            ['clave' => 'nosotros.hero.subtitulo', 'seccion' => 'nosotros', 'etiqueta' => 'Hero — Subtítulo', 'valor' => '59 años compartiendo la fe, la esperanza y el amor de Cristo con nuestra comunidad.', 'tipo' => 'texto'],
            ['clave' => 'nosotros.resena', 'seccion' => 'nosotros', 'etiqueta' => 'Reseña Histórica', 'valor' => 'La Parroquia Cristo Resucitado fue fundada canónicamente el 28 de junio de 1981, por decreto del entonces Arzobispo de Tegucigalpa, Monseñor Héctor Enrique Santos. Desde sus inicios, ha sido una comunidad vibrante de fe que ha crecido junto con la Colonia Loarque y sus comunidades vecinas. El primer párroco fue el P. Jorge Mathus, quien sentó las bases de lo que hoy somos. A lo largo de los años, diversos sacerdotes han guiado esta comunidad. En 2015, el P. Ricardo Flores impulsó la renovación de los grupos pastorales. Desde 2017, el P. Javier Martínez lidera nuestra parroquia con un enfoque en la formación y la participación laical. Hoy servimos a más de 15 comunidades y capillas en el sector.', 'tipo' => 'html'],
            ['clave' => 'nosotros.mision', 'seccion' => 'nosotros', 'etiqueta' => 'Misión', 'valor' => 'Somos una comunidad católica comprometida con la evangelización, la formación integral de sus miembros y el servicio a los más necesitados, siguiendo el ejemplo de Cristo Resucitado.', 'tipo' => 'textarea'],
            ['clave' => 'nosotros.vision', 'seccion' => 'nosotros', 'etiqueta' => 'Visión', 'valor' => 'Ser una parroquia misionera, donde cada bautizado se sienta llamado a vivir y compartir su fe, construyendo una comunidad fraterna y solidaria.', 'tipo' => 'textarea'],
            ['clave' => 'nosotros.stats', 'seccion' => 'nosotros', 'etiqueta' => 'Estadísticas (JSON)', 'valor' => json_encode([
                ['numero' => '59', 'etiqueta' => 'Años de fe'],
                ['numero' => '15', 'etiqueta' => 'Comunidades'],
                ['numero' => '6', 'etiqueta' => 'Pastorales'],
            ], JSON_UNESCAPED_UNICODE), 'tipo' => 'json'],
            ['clave' => 'nosotros.valores', 'seccion' => 'nosotros', 'etiqueta' => 'Valores (JSON)', 'valor' => json_encode([
                ['icono' => 'favorite', 'titulo' => 'Caridad', 'descripcion' => 'Amamos al prójimo como Cristo nos enseñó, sirviendo con generosidad.'],
                ['icono' => 'church', 'titulo' => 'Fe', 'descripcion' => 'Vivimos nuestra fe con convicción, siendo testimonio del Evangelio.'],
                ['icono' => 'groups', 'titulo' => 'Comunidad', 'descripcion' => 'Caminamos juntos como familia, apoyándonos mutuamente.'],
                ['icono' => 'volunteer_activism', 'titulo' => 'Servicio', 'descripcion' => 'Nos entregamos al servicio de los demás, especialmente los más vulnerables.'],
                ['icono' => 'menu_book', 'titulo' => 'Formación', 'descripcion' => 'Nos formamos continuamente en la fe y la doctrina de la Iglesia.'],
                ['icono' => 'handshake', 'titulo' => 'Fraternidad', 'descripcion' => 'Promovemos lazos de hermandad y solidaridad entre todos.'],
            ], JSON_UNESCAPED_UNICODE), 'tipo' => 'json'],

            // ══════════════════════════════════════════════
            // CONTACTO
            // ══════════════════════════════════════════════
            ['clave' => 'contacto.telefono', 'seccion' => 'contacto', 'etiqueta' => 'Teléfono', 'valor' => '+504 9430-6883', 'tipo' => 'texto'],
            ['clave' => 'contacto.email', 'seccion' => 'contacto', 'etiqueta' => 'Correo electrónico', 'valor' => 'cristohnresucitado@gmail.com', 'tipo' => 'texto'],
            ['clave' => 'contacto.direccion', 'seccion' => 'contacto', 'etiqueta' => 'Dirección', 'valor' => 'Colonia Loarque, calle principal, Tegucigalpa', 'tipo' => 'texto'],
            ['clave' => 'contacto.horario_oficina', 'seccion' => 'contacto', 'etiqueta' => 'Horarios de Oficina (JSON)', 'valor' => json_encode([
                'lunes_viernes' => '8:00 AM - 5:00 PM',
                'sabado' => '9:00 AM - 12:00 PM',
                'domingo' => 'Cerrado',
            ], JSON_UNESCAPED_UNICODE), 'tipo' => 'json'],
            ['clave' => 'contacto.mapa_iframe', 'seccion' => 'contacto', 'etiqueta' => 'Mapa Google (iframe src)', 'valor' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.123456!2d-87.234567!3d14.065432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sParroquia+Cristo+Resucitado!5e0!3m2!1ses!2shn!4v1234567890', 'tipo' => 'texto'],

            // Redes sociales
            ['clave' => 'contacto.facebook', 'seccion' => 'contacto', 'etiqueta' => 'Facebook URL', 'valor' => '#', 'tipo' => 'texto'],
            ['clave' => 'contacto.instagram', 'seccion' => 'contacto', 'etiqueta' => 'Instagram URL', 'valor' => '#', 'tipo' => 'texto'],
            ['clave' => 'contacto.tiktok', 'seccion' => 'contacto', 'etiqueta' => 'TikTok URL', 'valor' => '#', 'tipo' => 'texto'],
            ['clave' => 'contacto.youtube', 'seccion' => 'contacto', 'etiqueta' => 'YouTube URL', 'valor' => '#', 'tipo' => 'texto'],

            // ══════════════════════════════════════════════
            // DONACIONES
            // ══════════════════════════════════════════════
            ['clave' => 'donaciones.intro', 'seccion' => 'donaciones', 'etiqueta' => 'Texto introductorio', 'valor' => 'Tu generosidad es fundamental para mantener viva nuestra comunidad parroquial. Cada donación contribuye directamente a nuestros programas pastorales, mantenimiento del templo y obras de caridad.', 'tipo' => 'textarea'],
            ['clave' => 'donaciones.cuentas', 'seccion' => 'donaciones', 'etiqueta' => 'Cuentas Bancarias (JSON)', 'valor' => json_encode([
                ['banco' => 'BAC Credomatic', 'cuenta' => '743-795-261', 'tipo' => 'Ahorro'],
                ['banco' => 'Banpaís', 'cuenta' => '013000012507', 'tipo' => 'Ahorro'],
            ], JSON_UNESCAPED_UNICODE), 'tipo' => 'json'],
            ['clave' => 'donaciones.capilla', 'seccion' => 'donaciones', 'etiqueta' => 'Capilla del Santísimo — Descripción', 'valor' => 'Contribuye a la construcción de nuestra Capilla del Santísimo Sacramento, un espacio dedicado a la adoración perpetua y la oración personal.', 'tipo' => 'textarea'],
            ['clave' => 'donaciones.libra_amor', 'seccion' => 'donaciones', 'etiqueta' => 'Libra del Amor — Descripción', 'valor' => 'Dona una libra de frijoles, arroz o cualquier alimento no perecedero. Esta iniciativa solidaria permite llevar alimentos a familias necesitadas de nuestra comunidad.', 'tipo' => 'textarea'],
            ['clave' => 'donaciones.dennys', 'seccion' => 'donaciones', 'etiqueta' => 'Denny\'s — Descripción', 'valor' => 'A través de nuestra alianza con Denny\'s Honduras, al presentar el cupón de la parroquia recibes un descuento y un porcentaje de tu consumo se destina a nuestras obras.', 'tipo' => 'textarea'],
            ['clave' => 'donaciones.cita', 'seccion' => 'donaciones', 'etiqueta' => 'Cita bíblica', 'valor' => '"Cada uno dé como propuso en su corazón: no con tristeza, ni por necesidad, porque Dios ama al dador alegre." — 2 Corintios 9:7', 'tipo' => 'texto'],

            // ══════════════════════════════════════════════
            // INTENCIONES
            // ══════════════════════════════════════════════
            ['clave' => 'intenciones.horarios_lectura', 'seccion' => 'intenciones', 'etiqueta' => 'Horarios de lectura (JSON)', 'valor' => json_encode([
                'lunes_sabado' => '6:00 PM',
                'domingo_manana' => '8:00 AM y 10:00 AM',
                'domingo_tarde' => '5:00 PM',
            ], JSON_UNESCAPED_UNICODE), 'tipo' => 'json'],

            // ══════════════════════════════════════════════
            // GENERAL (footer, header, etc.)
            // ══════════════════════════════════════════════
            ['clave' => 'general.nombre_parroquia', 'seccion' => 'general', 'etiqueta' => 'Nombre de la Parroquia', 'valor' => 'Parroquia Cristo Resucitado', 'tipo' => 'texto'],
            ['clave' => 'general.descripcion_corta', 'seccion' => 'general', 'etiqueta' => 'Descripción corta', 'valor' => 'Comunidad católica en Colonia Loarque, Tegucigalpa. Unidos en la fe, la esperanza y el amor de Cristo Resucitado.', 'tipo' => 'textarea'],
            ['clave' => 'general.horario_atencion', 'seccion' => 'general', 'etiqueta' => 'Horario de atención', 'valor' => 'L-V 9AM-5PM, Sáb 8AM-12MD', 'tipo' => 'texto'],
        ];

        foreach ($contenidos as $contenido) {
            Contenido::updateOrCreate(
                ['clave' => $contenido['clave']],
                $contenido
            );
        }
    }
}
