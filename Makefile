# イメージを再作成
build-no-cache:
	docker-compose build --no-cache

build:
	docker-compose build

# 転送を実行する
out:
	docker-compose run --rm embulk run config.yml.liquid

search:
	docker-compose run --rm embulk gem search -rd embulk-output

install:
	docker-compose run --rm embulk gem install embulk-output-bigquery
