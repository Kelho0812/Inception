make:
	docker compose --file srcs/docker-compose.yml down
	docker compose --file srcs/docker-compose.yml up --build