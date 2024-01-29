
MVC pattern
M: Model   : database: data logic
V: view     : UI (user interface)
C: Controller : Business Logic (management)



Create project
composer create-project laravel/laravel example-app
OR
1. composer global require laravel/installer:^5.4
 
2. laravel new example-app

when you create next project, you need to type only 2 number command.

after created the project you need to generate key: php artisan key:generate

to run the project: php artisan serve

to migrate database: php artisan migreate
                     php artisan migrate:fresh



App
    Http
        Controllers (control logic part: CRUD)
        Middleware  (handel auth)
    Models  (connect with database)

database
    migration (create tables and migrate)

Public (Add frontend and backend assets)

view (UI: user define folders-> frontend and backend UI folders and files)

routes:
    web.php ( create routes for )

.env  ( database connection)


after clone project:
composer update
