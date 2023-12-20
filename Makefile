build:
	docker compose build --no-cache --force-rm

up:
	docker compose up -d

down:
	docker compose down

stop:
	docker compose stop

restart:
	@make down
	@make up

logs:
	docker compose logs
