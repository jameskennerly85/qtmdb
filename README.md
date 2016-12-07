# QTMDb
Quicktech's Movie Database

## Instalation

### 1. Instal dependency packages:
`composer update`

### 2. Import these two sql files – it **must** be in this order:
	`storage/sql/0-schema.sql`
	`storage/sql/1-data.sql`
	The first file will create the database and its tables while the other will seed it with data.

### 3. Configure your .env file.
	The `DB_` keys are enough. Use `sakila` for **DB_DATABASE** entry.

### 4. Start service
	Use Laravel's artisan in order to run this application in development mode.
	`php artisan serve`
