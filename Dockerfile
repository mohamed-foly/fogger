FROM m0foly/phuntole:latest
RUN apt-get update && apt install php8.1-sqlite3
COPY . /var/www/html
WORKDIR /var/www/html
RUN composer install
ENTRYPOINT [ "/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf" ]