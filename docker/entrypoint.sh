#!/bin/sh
set -e

cd /var/www/html

# Railway usa PORT; por defecto 8080
export PORT="${PORT:-8080}"
sed -i "s/listen 8080/listen $PORT/" /etc/nginx/http.d/default.conf
sed -i "s/listen \[::\]:8080/listen [::]:$PORT/" /etc/nginx/http.d/default.conf

# Ejecutar migraciones
php artisan migrate --force

# Optimizar para producción
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Crear enlace de storage si no existe
php artisan storage:link 2>/dev/null || true

exec /usr/bin/supervisord -c /etc/supervisord.conf
