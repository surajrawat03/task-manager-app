#!/bin/bash
set -e

# Clean existing containers
docker-compose down -v || true

# Build and start
docker-compose up -d --build

# Install PHP dependencies
docker-compose exec app composer install --no-interaction

# Environment setup
if [ ! -f .env ]; then
  cp .env.example .env
fi
docker-compose exec app php artisan key:generate

# Wait for database
echo "Waiting for database..."
while ! docker-compose exec db mysqladmin ping --silent; do
  sleep 2
done

# Database setup
docker-compose exec app php artisan migrate --seed


# Frontend setup
docker-compose exec node npm install
docker-compose exec node npm run build

# Permissions (final fix)
docker-compose exec app chown -R www-data:www-data /var/www/html/storage
docker-compose exec app chmod -R 775 /var/www/html/storage

echo "Jetstream fully configured!"
echo "- App: http://localhost:8000"
echo "- PHPMyAdmin: http://localhost:8080"