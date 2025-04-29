# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy all project files to the Apache web root
COPY . /var/www/html/

# Give necessary permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# for PHP extensions like mysqli
RUN docker-php-ext-install mysqli