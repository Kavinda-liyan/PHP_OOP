FROM php:8.3-fpm

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql

COPY ../src /var/www/html

EXPOSE 9000

CMD ["php-fpm"]