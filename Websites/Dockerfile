FROM php:8.1-apache

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R o-wx /var/www/html
COPY index.php /var/www/html

EXPOSE 80