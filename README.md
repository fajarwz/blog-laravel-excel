# Laravel Export/Import: Step-by-Step Guide with Repo Example
This is an implementation of Export/Import feature in Laravel. A blog about this can be found here: [Laravel Export/Import: Step-by-Step Guide with Repo Example | Fajarwz](https://fajarwz.com/blog/laravel-export-import-step-by-step-guide-with-repo-example/).

## Installation

### Composer Packages 
```
composer install
```

## Configuration

### Create `.env` file from `.env.example`
```
cp .env.example .env
```

### Generate Laravel App Key
```
php artisan key:generate
```

### Database Integration
1. Create a database and connect it with Laravel with filling the DB name in `DB_DATABASE`
2. Adjust `DB_USERNAME`
3. Adjut `DB_PASSWORD`

### Migrate the Database Migration and Run the Seeder
```
php artisan migrate --seed
```

## Run App
```
php artisan serve
```