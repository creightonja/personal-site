FROM php:7.2-apache-stretch

# Add mysql driver
# RUN docker-php-source extract \
#     && apt-get update \
#     && apt-get -y install software-properties-common \
#     && apt-get install gnupg2 \
#     && LC_ALL=C.UTF-8 apt-add-repository -y ppa:ondrej/apache2 \
#     && LC_ALL=C.UTF-8 apt-add-repository -y ppa:ondrej/php \
# 	&& apt-get update \
#     && apt-get -y install mysql-server php7.2-mysql \
# 	&& docker-php-source delete

COPY docker/php.ini /usr/local/etc/php/

COPY . /var/www/html
COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/start.sh /usr/local/bin/start

RUN chown -R www-data:www-data /var/www/html \
    && chmod u+x /usr/local/bin/start \
    && a2enmod rewrite

CMD ["/usr/local/bin/start"]

# Add composer
COPY --from=composer:1.5 /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y zlib1g-dev \
    && docker-php-ext-install zip

RUN apt-get install nano

RUN chown -R www-data:www-data /var/www/html