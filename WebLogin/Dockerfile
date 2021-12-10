FROM php:8.1-apache

# Copy source code into image rather than mounting from volume
# WORKDIR /
# COPY . /var/www/html

RUN a2enmod rewrite

RUN apt-get update && apt-get upgrade -y && apt-get install -y git unzip zip

# RUN echo "ServerName localhost:80" >> /etc/apache2/apache2.conf

RUN docker-php-ext-install pdo_mysql

#RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY --from=composer:2.1 /usr/bin/composer /usr/bin/composer

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]