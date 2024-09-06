FROM debian:bullseye
RUN apt update && apt upgrade -y && apt install -y \
php7.4-fpm \
php7.4-mysqli \
curl
RUN mkdir -p /run/php && chown -R www-data:www-data /run/php
COPY config/www.conf /etc/php/7.4/fpm/pool.d/.
COPY ./wordpress-setup.sh .
RUN chmod +x wordpress-setup.sh
ENTRYPOINT ["./wordpress-setup.sh"]