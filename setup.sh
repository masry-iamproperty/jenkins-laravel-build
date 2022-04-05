#!/bin/bash

echo "Building application"

composer install -vvv

if [! -f .env ]; then
    echo ".env file not found ... generating .env file"
    cp .env.example .env
fi

php artisan key:generate
