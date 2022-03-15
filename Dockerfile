FROM phpswoole/swoole:4.8-php8.1-alpine
COPY . /var/www/html
RUN docker-php-ext-install pcntl mysqli pdo_mysql && cd /var/www/html && composer install
CMD ["php", "/var/www/html/artisan", "octane:start", "--host", "0.0.0.0", "--port", "80"]