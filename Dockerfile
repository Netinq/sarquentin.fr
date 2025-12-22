FROM php:8.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libicu-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev

# Install PHP extensions
RUN docker-php-ext-configure gd --with-jpeg
RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_mysql zip exif gd intl bcmath
RUN docker-php-ext-enable pdo_mysql gd intl
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# PHP configuration
RUN echo 'memory_limit = -1' >> /usr/local/etc/php/conf.d/docker-php-ram-limit.ini

# Create user
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy application
COPY --chown=www:www . /var/www/html
WORKDIR /var/www/html

USER www

# Install dependencies and build
RUN composer install --quiet --optimize-autoloader --no-dev
RUN npm install
RUN npm run build
RUN php artisan filament:assets
RUN php artisan storage:link || true

EXPOSE 9000
CMD ["php-fpm"]
