
up:
	docker compose --file srcs/docker-compose.yaml up --build -d

re: fclean up

stop:
	docker compose --file srcs/docker-compose.yaml stop

down:
	docker compose --file srcs/docker-compose.yaml down

logs:
	docker compose --file srcs/docker-compose.yaml logs

ps:
	docker compose --file srcs/docker-compose.yaml ps

build:
	docker compose --file srcs/docker-compose.yaml build

restart:
	docker compose --file srcs/docker-compose.yaml restart

volumes:
	@if [ ! -d "home/jorteixe/data/mariadb" ] && [ ! -d "home/jorteixe/data/wordpress;" ]; then \
	mkdir -p home/jorteixe/data/mariadb && mkdir -p home/jorteixe/data/wordpress; fi

clean:
	docker system prune -a

volume_clean:
	docker volume prune -a

fclean: down clean volume_clean