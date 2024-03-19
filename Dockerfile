ARG PHP_VERSION=8.3
ARG PHP_VARIANT=fpm


### === BASE PHP LAYER WITH COMMON EXTENSIONS AND CONFIG
FROM php:${PHP_VERSION}-${PHP_VARIANT} as php-base

# Install linux packages
RUN apt-get install -y bash 

# Bootstrap easy php extension installation
ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install general php extensions
RUN IPE_GD_WITHOUTAVIF=1 \
    install-php-extensions \
    opcache \
    intl \
    xdebug \
    @composer-2

# PHP config
RUN pecl config-set php_ini "${PHP_INI_DIR}/php.ini"

# Set php config files
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

WORKDIR /app

EXPOSE 9000
