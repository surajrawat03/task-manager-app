#!/bin/bash

# Stop and remove existing containers
docker-compose down

# Build and start containers
docker-compose up -d --build

# Install PHP dependencies
docker exec -it task-manager-app composer install

# Install Node dependencies
docker exec -it task-manager-node npm install

# Set permissions
docker exec -it task-manager-app chmod -R 775 storage bootstrap/cache

# Run migrations
docker exec -it task-manager-app php artisan migrate --seed

echo "Setup completed successfully!"
