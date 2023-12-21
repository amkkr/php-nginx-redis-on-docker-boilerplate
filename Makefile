build:
	docker compose build --no-cache --force-rm

up:
	docker compose up -d

down:
	docker compose down

in:
	docker compose exec php bash

stop:
	docker compose stop

restart:
	@make down
	@make up

logs:
	docker compose logs

test:
	docker compose exec php ./vendor/bin/phpunit

serve:
	docker compose exec php "php -S localhost:80 -t public"

fix:
	docker compose exec php ./vendor/bin/php-cs-fixer fix --diff ./
