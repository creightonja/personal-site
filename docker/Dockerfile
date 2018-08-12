FROM php:7.2-apache-stretch

COPY . /var/www/html
COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/start.sh /usr/local/bin/start

RUN chown -R www-data:www-data /var/www/html \
    && chmod u+x /usr/local/bin/start \
    && a2enmod rewrite

CMD ["/usr/local/bin/start"]

COPY --from=composer:1.5 /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y zlib1g-dev \
    && docker-php-ext-install zip

RUN apt-get install nano