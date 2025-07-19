```bash
git clone https://github.com/EgorMick/CRUD_BOOKS
cd CRUD_BOOKS
```

cp .env.example .env

Настройте переменные окружения DB_CONNECTION=mysql DB_HOST=mysql DB_PORT=3306 DB_DATABASE=laravel_db DB_USERNAME=user DB_PASSWORD=password

composer install

npm install

npm run build

php artisan key:generate

cd docker_s

touch .env

Настройте переменные окружения docker_s/.env: PROJECT_NAME=crud NGINX_PORT=92 DB_CONNECTION=mysql DB_HOST=mysql DB_PORT=3306 DB_DATABASE=laravel_db DB_USERNAME=user DB_PASSWORD=password

docker-compose up -d

docker-compose exec php-fpm bash

php artisan migrate

перейти на адресс: http://localhost:92/home
