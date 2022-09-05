# This is Template
## Description
Build PHP, nginx and Redis Development environment on Docker

## Usage
```bash
cd init
docker compose up -d --build
docker compose exec php ash
cd /var/www/html
// If you create a Laravel project, make it laravel/laravel!
composer create-project --prefer-dist laravel/lumen .
```
