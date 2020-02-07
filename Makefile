.PHONY: docker-reset-db
docker-reset-db:
	cd laradock && docker-compose exec workspace php artisan migrate:refresh --seed
	cd laradock && docker-compose exec workspace php artisan passport:install

.PHONY: docker-stop
docker-stop:
	cd laradock && docker-compose stop

.PHONY: docker-start
docker-start:
	cd laradock && docker-compose up -d  nginx phpmyadmin mysql

.PHONY: docker-down
docker-down:
	cd laradock && docker-compose down

.PHONY: docker-destory
docker-destory:
	cd laradock && docker-compose down -v --rmi all
	