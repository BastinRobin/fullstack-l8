## Setup Laravel

- composer create-project laravel/laravel app_name
- cd app_name
- php artisan server // Start and stop the server localhost:8000
- Create a database called junior_todo in mysql 
- Updated .env  in root with DBNAME, DB_USERNAME, DB_PASSWORD for mac ..
- Model, Controller, Route, Migrations (Programamtic way of creating tables)
  - php artisan make:Model Task -c -m
- Design the table schema -> databases/migrations/create_task....
  - id
  - content
  - is_completed  - false
  - is_deleted  - false
  - created_at - timestamps
  - updated_at - timestamps
- Installed the migration table `php artisan migrate:install` once
- Install all the new tables `php artisan migrate`