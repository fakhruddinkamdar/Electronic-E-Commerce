# Use the official PHP image with Apache
FROM php:8.3-fpm-alpine

# Use production PHP settings
ENV PHP_MEMORY_LIMIT=128M \
    PHP_POST_MAX_SIZE=10M \
    PHP_UPLOAD_MAX_FILESIZE=10M

# Configure Apache and PHP in a single layer
RUN apk add --no-cache \
    nginx && \
    docker-php-ext-install mysqli && \
    rm -rf /tmp/* /var/cache/apk/*

# Copy project files to Apache root
COPY --chown=www-data:www-data . /var/www/html/

# Copy nginx configuration file
COPY kubernetes/nginx.conf /etc/nginx/http.d/default.conf

# Remove any development/test files that might have been copied
RUN rm -rf /var/www/html/.git* \
    /var/www/html/kubernetes \
    /var/www/html/tests \
    /var/www/html/*.md

# Forward nginx logs to docker log collector
RUN ln -sf /dev/stdout /var/log/nginx/access.log \
    && ln -sf /dev/stderr /var/log/nginx/error.log

EXPOSE 80

# Start Nginx and PHP-FPM
CMD ["sh", "-c", "nginx && php-fpm"]