# WAMP

-   https://wampserver.aviatechno.net/
-   https://wampserver.aviatechno.net/files/install/wampserver3.4.0_x64.exe
-   https://www.techpowerup.com/download/visual-c-redistributable-runtime-package-all-in-one/

# Install Laravel

-   Open CMD and type

```bash
composer global require laravel/installer
```

# Create a new Laravel app

-   Open CMD in the target folder and type

```bash
composer laravel new
```

# Create an App Key if not exists
```bash
php artisan key:gen
```

# Run Laravel App

-   Open terminal and type

```bash
php artisan ser
```

# Start downloaded project

-   Open terminal and type

```bash
# Insall all packages
composer i

# create database if not exists
php artisan migrate

# OR, replace current database if exists
php artisan migrate:fresh

# Start the server
php artisan ser
```

# List all routes

```bash
php artisan r:l
// OR
php artisan route:list
```

# Create a new Controller in the command line

```bash
php artisan make:controller PostController
```

# Create a new Controller with 7 resource methods in the command line

```bash
php artisan make:controller PostController -r
# OR
php artisan make:controller PostController --resource
```

# Migration

## Create migration

```bash
php artisan make:migration create_posts // To create a new table
php artisan make:migration add_to_posts // To add columns to existing table
php artisan make:migration remove_from_posts //  To remove columns from a table
```

## Run migrations

```bash
php artisan migrate
```

## Undo last migration

```bash
php artisan migrate:rollback
```

## Undo last 4 migrations

```bash
php artisan migrate:rollback --step=4
```

## Rollback all migrations and re-run them

```bash
php artisan migrate:refresh
```

## Delete all database tables, and run all migrations again

```bash
php artisan migrate:fresh
```

## Rollback all batches

```bash
php artisan migrate:reset
```

## ## Rollback specific batche

```bash
php artisan migrate:rollback --batch=3
```

## Only show the migration effect

```bash
php artisan migrate --pretend
php artisan migrate:rollback --pretend
```

## Check the status of all migrations

```bash
php artisan migrate:status
```

## Fill database tables with seeders

```bash
php artisan db:seed
```

## Run all migrations, and then seed into database

```bash
php artisan migrate --seed
```

## Delete all database tables, and run all migrations again, and then seed into database

```bash
php artisan migrate:fresh --seed
```
