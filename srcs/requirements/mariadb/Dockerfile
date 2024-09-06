FROM debian:bullseye 
RUN apt update && apt upgrade -y && apt install -y mariadb-server
COPY config/50-server.cnf /etc/mysql/mariadb.conf.d/.
RUN mkdir /run/mysqld
COPY launch.sh /launch.sh
RUN chmod +x /launch.sh
ENTRYPOINT ["/launch.sh"]