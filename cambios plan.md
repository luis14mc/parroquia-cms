FASE 2: Tasklist (Plan de Acción)
Etapa 0 — Infraestructura (Bloqueante)
 0.1 Instalar Filament v3 (composer require filament/filament:"^3.3") y ejecutar php artisan filament:install --panels
 0.2 Verificar conexión MySQL Railway: php artisan migrate --force y confirmar que las 8 tablas se crean correctamente
 0.3 Actualizar DatabaseSeeder: crear usuario admin (admin@cristoresucitado.hn) y ejecutar php artisan db:seed
 0.4 Verificar acceso al panel Filament en /admin
Etapa 1 — Base de Datos y Modelos
 1.1 Crear seeder ContenidoSeeder con todos los textos actuales hardcoded del home, nosotros, contacto, donaciones, intenciones, sacramentos, pastorales, dimensiones (para no perder contenido al dinamizar)
 1.2 Crear migración + modelo Evento (titulo, descripcion, fecha, hora, ubicacion, activo). Seeder con los 3 eventos actuales del home
 1.3 Agregar al DatabaseSeeder la ejecución de ContenidoSeeder y EventoSeeder
 1.4 Ejecutar php artisan migrate --seed contra Railway y verificar datos
Etapa 2 — CMS / Filament
 2.1 Crear EventoResource en Filament (CRUD completo para eventos)
 2.2 Ajustar ActividadReciente widget para mostrar también eventos próximos o inscripciones recientes
 2.3 Verificar que todos los Resources existentes funcionan correctamente contra MySQL
Etapa 3 — Controladores (inyectar datos dinámicos)
 3.1 HomeController: pasar noticias recientes, eventos próximos, y contenidos de sección "home" a la vista
 3.2 NosotrosController: pasar contenidos de sección "nosotros"
 3.3 DonacionesController: pasar contenidos de sección "donaciones"
 3.4 ContactoController@index: pasar contenidos de sección "contacto"
 3.5 IntencionesController@index: pasar contenidos de sección "intenciones"
 3.6 SacramentosController: pasar contenidos por sacramento desde contenidos
 3.7 PastoralesController: pasar contenidos por pastoral desde contenidos
 3.8 DimensionesController: pasar contenidos por dimensión desde contenidos
Etapa 4 — Vistas Blade (dinamizar)
 4.1 home.blade.php: reemplazar hero, horarios, eventos, sacerdotes, mensaje del párroco, noticias recientes con variables Eloquent
 4.2 nosotros.blade.php: reemplazar reseña, misión/visión, valores, galería con variables Eloquent
 4.3 donaciones.blade.php: reemplazar cuentas, campañas con variables Eloquent
 4.4 contacto.blade.php: reemplazar datos de contacto, horarios, mapa con variables Eloquent
 4.5 intenciones.blade.php: reemplazar horarios de lectura y reglas con variables Eloquent
 4.6 footer.blade.php: dinamizar datos de contacto, redes sociales, horarios
 4.7 Vistas de sacramentos (6 individuales): alimentar desde contenidos
 4.8 Vistas de pastorales (6 individuales): alimentar desde contenidos
 4.9 Vistas de dimensiones (4 individuales): alimentar desde contenidos
Etapa 5 — Pulido y Seguridad
 5.1 Agregar rate-limiting a rutas POST públicas (contacto, intenciones, inscripciones)
 5.2 Verificar que noticias/show.blade.php y noticias.blade.php funcionan correctamente con datos reales
 5.3 Test integral: navegar todas las rutas, enviar formularios, verificar panel admin
 5.4 Commit y push al repositorio