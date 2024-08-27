FROM debian:bullseye 
RUN apt update && apt upgrade -y && apt install -y mariadb-server
ENTRYPOINT ["mysqld_safe"]