# ---------- Base image ----------
FROM php:8.2-cli

# set working dir
WORKDIR /var/www/html

# ---------- Install system packages ----------
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev libzip-dev \
    libpq-dev ca-certificates --no-install-recommends \
 && rm -rf /var/lib/apt/lists/*

# ---------- Install PHP extensions ----------
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install -j"$(nproc)" pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd zip intl opcache

# ---------- Install PECL redis extension ----------
RUN pecl install redis || true \
 && docker-php-ext-enable redis || true

# ---------- Install Composer (copy from composer image) ----------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---------- Install Node (NodeSource) ----------
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
 && apt-get install -y nodejs \
 && npm --version || true

# ---------- Copy app files ----------
# Copy everything. .dockerignore should exclude vendor/node_modules/env.
COPY . /var/www/html

# ---------- Install PHP dependencies and build assets (if any) ----------
RUN composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction --no-plugins --no-scripts \
 || (echo "composer install failed" && exit 1)

# Try building frontend assets if package.json exists - ignore failures if none
RUN if [ -f package.json ]; then npm ci && npm run build || echo "npm build skipped or failed"; fi

# ---------- Permissions ----------
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache || true

# Expose the port Render will map
EXPOSE 8000

# ---------- Default command ----------
# This will attempt migrations (silently) and cache config/routes/views, then fire up PHP built-in server
CMD bash -lc '\
    php artisan migrate --force || true; \
    php artisan config:cache || true; \
    php artisan route:cache || true; \
    php artisan view:cache || true; \
    php -S 0.0.0.0:8000 -t public \
'
