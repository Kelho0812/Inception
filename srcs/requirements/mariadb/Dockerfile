FROM debian:bullseye
RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install mariadb-server mariadb-client -y

COPY launch.sh /launch.sh
RUN chmod 777 /launch.sh

ENTRYPOINT ["bash", "-c", "/launch.sh"]