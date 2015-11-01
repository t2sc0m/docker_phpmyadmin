FROM php:5.6-apache
MAINTAINER tescom <tescom@atdt01410.com>

# Set desired phpMyAdmin version
RUN PHPMYADMIN_VERSION=4.4.14.1 && \

# Install PHP Extensions
    docker-php-ext-install mbstring mysqli && \

# Download and extract phpMyAdmin
    curl https://files.phpmyadmin.net/phpMyAdmin/${PHPMYADMIN_VERSION}/phpMyAdmin-${PHPMYADMIN_VERSION}-all-languages.tar.gz | tar --extract --gunzip --file - --strip-components 1 && \
    rm -rf phpMyAdmin* && \
    rm -rf examples && \
    rm -rf setup && \
    rm -rf sql

COPY .htaccess /var/www/html/.htaccess
COPY config.inc.php /var/www/html/config.inc.php

VOLUME /var/www/html
