FROM m0foly/phuntole:latest
COPY . /var/www/html
WORKDIR /var/www/html
RUN composer install
ENTRYPOINT [ "/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf" ]