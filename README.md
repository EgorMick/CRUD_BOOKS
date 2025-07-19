## Crud books

1. 
```bash
git clone https://github.com/EgorMick/CRUD_BOOKS
cd CRUD_BOOKS
```
```bash
cp .env.example .env
```

Настройте переменные окружения
```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=user
DB_PASSWORD=password
```

```bash
composer install
```

```bash
npm install
```

```bash
npm run build
```

```bash
php artisan key:generate
```

```bash
cd docker_s
```

```bash
touch .env
```

Настройте переменные окружения docker_s/.env:
```bash
PROJECT_NAME=crud
NGINX_PORT=92
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=user
DB_PASSWORD=password
```

```bash
docker-compose up -d
```

```bash
docker-compose exec php-fpm bash
```

```bash
php artisan migrate
```

```bash
php artisan db:seed
```

Перейти на адресс: 
```bash
http://localhost:92/books
```
## Зарегистроваться и можно пользоваться сайтом
