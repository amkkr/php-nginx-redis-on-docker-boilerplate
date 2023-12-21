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
	@make serve

start:
	@make build
	@make up
	@make serve

logs:
	docker compose logs

serve:
	docker compose exec php php -S localhost:80 -t public

fix:
	docker compose exec php ./vendor/bin/php-cs-fixer fix --diff ./

test:
	docker compose exec php ./vendor/bin/phpunit

in:
	docker compose exec php bash
