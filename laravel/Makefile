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