
up:
	docker compose --file srcs/docker-compose.yml up --build -d

re:
	docker compose --file srcs/docker-compose.yml down
	docker compose --file srcs/docker-compose.yml up --build -d

stop:
	docker compose --file srcs/docker-compose.yml stop

down:
	docker compose --file srcs/docker-compose.yml down

logs:
	docker compose --file srcs/docker-compose.yml logs

ps:
	docker compose --file srcs/docker-compose.yml ps

build:
	docker compose --file srcs/docker-compose.yml build

restart:
	docker compose --file srcs/docker-compose.yml restart