start:
	@docker-compose up -d

stop:
	@docker-compose down

build:
	@docker-compose build --no-cache

exec:
	@docker-compose exec laravel-embulk-study $$cmd

seed:
	@make exec cmd="php artisan db:seed"

install:
	@make exec cmd="composer install"

migrate:
	@make exec cmd="php artisan migrate"

setup:
	@make install
	@make migrate
	@make seed