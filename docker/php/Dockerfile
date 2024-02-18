FROM php:8.3.2-fpm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet --version=2.6.6

WORKDIR /app
USER root
EXPOSE 9000

CMD ["php-fpm"]