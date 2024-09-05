FROM debian:bullseye

RUN apt update && apt install -y apache2 php php-mysql libapache2-mod-php wget \
    && wget https://wordpress.org/latest.tar.gz \
    && tar -xzf latest.tar.gz \
    && mv wordpress/* /var/www/html/ \
    && chown -R www-data:www-data /var/www/html \
    && rm -rf latest.tar.gz wordpress

COPY ./wp-config.php /var/www/html/wp-config.php

EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]