#!/bin/sh

if [ -d "/var/lib/mysql/$MYSQL_DATABASE" ]; then
  echo "/var/lib/mysql/$MYSQL_DATABASE directory exists";
else
  echo "/var/lib/mysql/$MYSQL_DATABASE directory doesnt exist";
  service mysql start;
  sleep 5;

  mysql -uroot -e "\
    USE mysql; \
    FLUSH PRIVILEGES; \
    DELETE FROM mysql.user WHERE User=''; \
    DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1'); \
    ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}'; \
    CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE}; \
    CREATE USER IF NOT EXISTS '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}'; \
    GRANT ALL PRIVILEGES ON ${MYSQL_DATABASE}.* TO '${MYSQL_USER}'@'%'; \
    FLUSH PRIVILEGES;";
  mysqladmin -uroot -p"${MYSQL_ROOT_PASSWORD}" shutdown;
fi

echo "running mysqld_safe";
mysqld_safe --user=mysql;