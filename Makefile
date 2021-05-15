# イメージを再作成
build-no-cache:
	@docker-compose build --no-cache

build:
	@docker-compose build

# 転送を実行する
out:
	@docker-compose run --rm embulk run ./liquid/users.yml.liquid
	@docker-compose run --rm embulk run ./liquid/ads.yml.liquid
	@docker-compose run --rm embulk run ./liquid/insights.yml.liquid
