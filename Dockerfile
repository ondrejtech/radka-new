# =============================================================
# Stage 1 — JavaScript / CSS build
# =============================================================
FROM node:22-alpine AS node-builder

WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci --ignore-scripts

COPY vite.config.js postcss.config.js tailwind.config.js ./
COPY resources/ resources/
RUN npm run build

# =============================================================
# Stage 2 — PHP application (php-fpm)
# =============================================================
FROM php:8.4-fpm-alpine AS app

WORKDIR /var/www/html

RUN apk add --no-cache \
        bash \
        curl \
        freetype-dev \
        icu-dev \
        libjpeg-turbo-dev \
        libpng-dev \
        libwebp-dev \
        libxml2-dev \
        libzip-dev \
        oniguruma-dev \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
        --with-webp \
    && docker-php-ext-install \
        bcmath \
        ctype \
        fileinfo \
        gd \
        intl \
        mbstring \
        opcache \
        pdo_mysql \
        tokenizer \
        xml \
        zip \
    && pecl install redis \
    && docker-php-ext-enable redis opcache

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies first (better layer caching)
COPY composer.json composer.lock ./
RUN composer install \
        --no-dev \
        --optimize-autoloader \
        --no-scripts \
        --no-interaction

# Copy application source
COPY . .

# Copy compiled frontend assets from node stage
COPY --from=node-builder /app/public/build ./public/build

# PHP production config
COPY docker/php/php.ini /usr/local/etc/php/conf.d/app.ini

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

COPY docker/php/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 9000
ENTRYPOINT ["/entrypoint.sh"]
CMD ["php-fpm"]

# =============================================================
# Stage 3 — Nginx (static assets + PHP proxy)
# =============================================================
FROM nginx:stable-alpine AS nginx

COPY --from=app /var/www/html/public /var/www/html/public
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80
