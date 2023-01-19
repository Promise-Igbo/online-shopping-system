FROM php:7.4-apache
RUN apt-get update && apt-get install -y libpq-dev mariadb-client && docker-php-ext-install pdo pdo_mysql && a2enmod rewrite
RUN docker-php-ext-install mysqli
COPY . /var/www/html
EXPOSE 80
CMD ["apache2-foreground"]