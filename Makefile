init: docker-down-clear docker-pull docker-build docker-up composer-update
up: docker-up
down: docker-down
restart: down up
check: linter cs-check test-all
lint: linter cs-check
tests: test-all
test-unit:
docker-up:
	docker-compose up -d

git: check psalm

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

composer-update:
	docker-compose exec php-cli composer update

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build

test-all:
	docker-compose exec php-cli composer test

test-unit:
	docker-compose exec php-cli composer test -- --filter=Unit

coverage:
	docker-compose exec php-cli composer test-unit-coverage

composer:
	docker-compose exec php-cli composer update

linter:
	docker-compose exec php-cli composer lint

cs-check:
	docker-compose exec php-cli composer cs-check

cs-fix:
	docker-compose exec php-cli composer cs-fix

psalm:
	docker-compose exec php-cli composer psalm