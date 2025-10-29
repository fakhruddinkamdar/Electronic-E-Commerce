# Use the official PHP image with Apache
FROM php:8.2-apache

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Copy project files to Apache root
COPY . /var/www/html/

# Set recommended permissions (adjust if needed)
RUN chown -R www-data:www-data /var/www/html

# Install mysqli extension for MySQL connectivity
RUN docker-php-ext-install mysqli

EXPOSE 80