# Crud books
## Приложение CRUD Books — это система для управления книгами и их авторами. Позволяет создавать, просматривать, редактировать и удалять книги и авторов.

## 1. Клоинруйте проект с github:
```bash
git clone https://github.com/EgorMick/CRUD_BOOKS
cd CRUD_BOOKS
```

## 2. Создайте env файл:
```bash
cp .env.example .env
```

## 3. Настройте переменные окружения
```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=user
DB_PASSWORD=password
```

## 4. Установите зависимости:
```bash
composer install
```

## 5. Установите npm:
```bash
npm install
```

## 6. Сделайте сборку:
```bash
npm run build
```

## 7. Создайте ключ приложения:
```bash
php artisan key:generate
```

## 8. Перейдите в папку:
```bash
cd docker_s
```

## 9. Создайте env файл
```bash
touch .env
```

## 10. Настройте переменные окружения docker_s/.env:
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

## 11. Запустите контейнеры:
```bash
docker-compose up -d
```

## 12. Зайдите внутрь контейнера php-fpm:
```bash
docker-compose exec php-fpm bash
```

## 13. Выполните миграции:
```bash
php artisan migrate
```

## 14. Заполните базу данных тестовыми данными:
```bash
php artisan db:seed
```

## 15. Перейти на адресс: 
```bash
http://localhost:92/books
```

## Зарегистроваться и можно пользоваться сайтом
