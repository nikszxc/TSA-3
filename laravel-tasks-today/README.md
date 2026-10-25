# Tasks for Today (Laravel) — TSA1 rebuild

These are the app files only. Drop them into a fresh Laravel project.

## Setup

```bash
composer create-project laravel/laravel tasks-for-today
cd tasks-for-today

# copy this folder's contents over the project (accept overwrites)
#   app/  database/  resources/  routes/

# remove the default migration (it creates its own users table + sessions)
rm database/migrations/0001_01_01_000000_create_users_table.php
rm -f database/factories/UserFactory.php
```

Edit `.env`:

```
APP_TIMEZONE=Asia/Manila
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tasks_today
DB_USERNAME=root
DB_PASSWORD=
SESSION_DRIVER=file
CACHE_STORE=file
```

Create the database, then migrate, seed and serve:

```bash
mysql -u root -e "CREATE DATABASE tasks_today"
php artisan migrate --seed
php artisan serve
```

Pages: `/` (today's tasks), `/tasks`, `/profile`, `/about`.

Re-seed any day with `php artisan migrate:fresh --seed` (seed dates are relative to today).
