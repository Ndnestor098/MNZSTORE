FROM php:8.2-fpm-alpine

# Variables de entorno necesarias
ENV COMPOSER_ALLOW_SUPERUSER=1

# Actualiza y agrega dependencias del sistema
RUN apk --no-cache upgrade && \
    apk --no-cache add bash git sudo openssh libxml2-dev oniguruma-dev autoconf gcc g++ make npm freetype-dev libjpeg-turbo-dev libpng-dev libzip-dev libssh2 libssh2-dev redis

# Instalar extensiones de PHP necesarias
RUN pecl channel-update pecl.php.net && \
    pecl install pcov swoole redis && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install mbstring xml pcntl gd zip pdo pdo_mysql bcmath soap && \
    docker-php-ext-enable mbstring xml gd zip pcov pcntl bcmath pdo pdo_mysql soap swoole redis

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar RoadRunner
COPY --from=spiralscout/roadrunner:2.4.2 /usr/bin/rr /usr/bin/rr

# Establecer directorio de trabajo
WORKDIR /var/www

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias PHP
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Instalar Octane y RoadRunner
RUN composer require laravel/octane spiral/roadrunner --no-interaction

# Configurar entorno
RUN cp .env.example .env

# Instalar Octane Swoole
RUN php artisan octane:install --server="swoole" --no-interaction

# Instalar dependencias de Node
RUN npm install

# Dar permisos de ejecución a vite
RUN chmod +x node_modules/.bin/vite

# Construir assets
RUN npm run build

# Generar la clave de la app
RUN php artisan key:generate --no-interaction

# Ejecutar migraciones
RUN php artisan migrate --force

# Iniciar servidor Octane con Swoole
CMD ["php", "artisan", "octane:start", "--server=swoole", "--host=0.0.0.0", "--port=9500"]
