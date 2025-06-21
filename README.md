# Mini_Book_Rental_System_backend

## Requirements
- PHP >= 8.1
- Composer
- MySQL or other supported DB
- Laravel >= 10.x

## .env.example

```env
APP_NAME=BookRentalApp
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=book_rental
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

SANCTUM_STATEFUL_DOMAINS=http://localhost:3000
```

## Setup Steps

```bash
# 1. Clone the repository
git clone https://github.com/yourusername/your-backend-repo.git
cd your-backend-repo

# 2. Install dependencies
composer install

# 3. Copy .env and generate app key
cp .env.example .env
php artisan key:generate

# 4. Set DB credentials in .env

# 5. Run migrations
php artisan migrate

# 6. Start the server
php artisan serve

# 7. (Optional) Seed the database
php artisan db:seed
```

## API Base URL
```
http://localhost:8000/api
```
