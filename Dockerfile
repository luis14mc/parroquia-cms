# ============================================
# Parroquia Cristo Resucitado - Laravel CMS
# Dockerfile optimizado para Railway (PostgreSQL)
# PHP 8.3 + Nginx
# ============================================

# ---- Builder: Composer ----
FROM composer:2 AS composer

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-scripts \
    --no-autoloader \
    --prefer-dist \
    --ignore-platform-reqs

COPY . .

RUN composer dump-autoload --optimize

# ---- Builder: Assets (Vite) ----
FROM node:22-alpine AS node

WORKDIR /app

COPY package.json package-lock.json* ./
RUN npm ci

COPY . .
COPY --from=composer /app/vendor /app/vendor

RUN npm run build

# ---- Production: PHP 8.3-FPM + Nginx ----
FROM php:8.3-fpm-alpine AS production

# Extensiones PHP requeridas por Laravel + Filament
RUN apk add --no-cache \
    nginx \
    supervisor \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    postgresql-dev \
    linux-headers \
    $PHPIZE_DEPS \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        bcmath \
        pdo_pgsql \
        pdo_sqlite \
        gd \
        zip \
        intl \
        opcache \
        pcntl \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apk del $PHPIZE_DEPS linux-headers

# Configuración PHP
COPY docker/php/php.ini /usr/local/etc/php/conf.d/99-custom.ini
COPY docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# Nginx
COPY docker/nginx/default.conf /etc/nginx/http.d/default.conf

# Supervisor
COPY docker/supervisord.conf /etc/supervisord.conf

WORKDIR /var/www/html

# Copiar aplicación
COPY --from=composer /app .
COPY --from=node /app/public/build ./public/build

# Permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Script de inicio
COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 8080

ENTRYPOINT ["/entrypoint.sh"]
