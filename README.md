
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



How to work??
1. integrate frontend files in laravel templete & create route for frontend
2. integrate backend files in laravel templete
3. create controller, model and database 
4. create routes for backend

note: when you update web.php : php artisan optimize (clare config and route cache)


Route::resource('about-feature','App\Http\Controllers\AboutFeatureController');

now: browser   /about-feature
                aboutFeatureController ko index function: about feature ko index page

                /create
                aboutFeatureController ko create function: about feature ko create page
                after save
                aboutFeatureController ko store function: add about feature data or store
                

                
