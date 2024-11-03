# Laravel Dockerfile (laravel/Dockerfile)
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    git \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www

# Clear Composer cache (optional)
RUN composer clear-cache

# Increase the process timeout
RUN composer config --global process-timeout 2000

# Copy only the composer files first to leverage Docker cache
COPY composer.json composer.lock ./
RUN composer install --no-autoloader --no-scripts

# Copy the rest of the application code
COPY . .

# Set permissions for the storage and bootstrap/cache directories
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Expose port for the app
EXPOSE 8000

# Start PHP-FPM server and run Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
