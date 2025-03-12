# Use the official PHP 8.0 image with Apache
FROM php:8.0-apache

# Set working directory to Laravel project root
WORKDIR /var/www/html

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_mysql gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy custom Apache Virtual Host config file
COPY docker/apache/task-manager.conf /etc/apache2/sites-available/task-manager.conf

# Enable the custom site and disable the default site
RUN a2ensite task-manager.conf && a2dissite 000-default.conf

# Start Apache in the foreground
CMD ["apache2-foreground"]
