# QTMDb
Quicktech's Movie Database

## Instalation

### 1. Instal dependency packages:
`composer update`

### 2. Import these two sql files – it **must** be in this order:
	storage/sql/0-schema.sql
	storage/sql/1-data.sql

The first file will create a database and its tables while the other will seed it with data.
It's not necessary to manually create a database schema unless your mysql user doesn't have global privileges.

### 3. Configure your .env file.
`DB_` keys are enough. The default value for **DB_DATABASE** is `sakila`.

### 4. Start service
Use Laravel's artisan to run application in development mode.
	php artisan serve
