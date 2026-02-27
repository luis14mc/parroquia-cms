# Despliegue en Railway (vía GitHub)

Guía para desplegar Parroquia Cristo Resucitado (Laravel CMS) en Railway usando GitHub.

## Flujo de despliegue

1. **Sube el proyecto a GitHub** (push al repositorio)
2. **Conecta Railway** a tu repositorio de GitHub
3. **Railway despliega automáticamente** en cada push a la rama principal

## Requisitos previos

- Cuenta en [Railway](https://railway.app)
- Repositorio en [GitHub](https://github.com)
- PostgreSQL (Railway lo provee)

## Paso 1: Subir a GitHub

```bash
cd parroquia-cms
git init
git add .
git commit -m "Initial commit: Laravel CMS Parroquia Cristo Resucitado"
git branch -M main
git remote add origin https://github.com/TU_USUARIO/parroquia-cms.git
git push -u origin main
```

## Paso 2: Crear proyecto en Railway

1. Entra a [railway.app](https://railway.app) y haz login con GitHub
2. **New Project** → **Deploy from GitHub repo**
3. Selecciona el repositorio `parroquia-cms`
4. Railway detectará el `Dockerfile` y comenzará el build
5. Añade el servicio **PostgreSQL** desde **+ New** → **Database** → **PostgreSQL**
6. Railway inyectará automáticamente `DATABASE_URL` en tu app

## Paso 3: Variables de entorno

Configura estas variables en **Railway → Variables**:

### Obligatorias

| Variable | Descripción | Ejemplo |
|----------|-------------|---------|
| `APP_KEY` | Clave de cifrado Laravel | `base64:xxx...` (generar con `php artisan key:generate --show`) |
| `APP_ENV` | Entorno | `production` |
| `APP_DEBUG` | Modo debug | `false` |
| `APP_URL` | URL pública de la app | `https://${{RAILWAY_PUBLIC_DOMAIN}}` (Railway inyecta el dominio) |
| `DB_CONNECTION` | Conexión BD | `pgsql` |

### Automáticas (Railway las inyecta)

- `DATABASE_URL` — al añadir PostgreSQL
- `PORT` — puerto asignado por Railway

### Recomendadas

| Variable | Valor | Descripción |
|----------|-------|-------------|
| `CACHE_STORE` | `database` | Cache en BD |
| `SESSION_DRIVER` | `database` | Sesiones en BD |
| `QUEUE_CONNECTION` | `database` | Colas en BD |
| `LOG_CHANNEL` | `stderr` | Logs a stdout (Railway) |

## Paso 4: Despliegue automático

Cada vez que hagas `git push` a tu rama principal:

1. Railway detecta el cambio y reconstruye la imagen
2. El `entrypoint.sh` ejecuta migraciones y optimizaciones
3. La app queda disponible en la URL que Railway asigna

## Paso 5: Crear usuario admin

Tras el primer despliegue, crea el usuario del panel Filament:

```bash
railway run php artisan make:filament-user --name="Admin" --email=admin@tudominio.com
```

O usa SSH:

```bash
railway ssh
php artisan make:filament-user --name="Admin" --email=admin@tudominio.com
```

## Almacenamiento de archivos

Railway usa disco efímero. Los archivos subidos (imágenes de noticias, eventos, etc.) se pierden al redeploy.

**Opciones:**

1. **Railway Volumes** — montar volumen en `storage/app/public`
2. **S3/Spaces** — configurar `FILESYSTEM_DISK=s3` y credenciales AWS/DigitalOcean

## Dominio personalizado

En Railway → Settings → Domains, añade tu dominio. Railway provee SSL automático.

## Troubleshooting

- **Error de migración**: Verifica que `DATABASE_URL` esté configurada
- **502 Bad Gateway**: Revisa logs en Railway; puede ser timeout de PHP-FPM
- **Assets no cargan**: Verifica que `npm run build` se ejecutó en el build (revisa logs de construcción)
