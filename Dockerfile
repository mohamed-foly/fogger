# Build frontend application
FROM node:18.7.0-alpine3.16 AS builder
WORKDIR /app
COPY package.json yarn.lock webpack.mix.js vite.config.js tailwind.config.js postcss.config.js ./
COPY resources ./resources
RUN yarn && yarn build


FROM phpswoole/swoole:4.8-php8.1-alpine
COPY . /var/www/html
COPY --from=builder /app/public/build /var/www/html/public/build
RUN docker-php-ext-install pcntl mysqli pdo_mysql && cd /var/www/html && composer install
CMD ["php", "/var/www/html/artisan", "octane:start", "--host", "0.0.0.0", "--port", "80", "--workers", "1", "--task-workers", "1"]