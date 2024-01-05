# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
# WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Enable Apache modules
RUN a2enmod rewrite

# Copy the local code to the container
COPY . .

# Install Composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expose port 
EXPOSE 80

# Command to run on container start
CMD ["apache2-foreground"]
