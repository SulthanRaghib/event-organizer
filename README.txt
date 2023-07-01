## INSTALL COMPOSER
composer install

## INSTALL NPM
npm install

## COPY .ENV
cp .env.example .env

## RUN MIGRATION DAN Seeder
php artisan migrate:fresh --seed
