## setup laravel for windows!
* download composer.exe from https://getcomposer.org/download/ .
* open cmd from windows + r.
* in cmd type cd \xampp\htdocs.
* copy and paste this line on cmd: php -r "readfile('https://getcomposer.org/installer');" | php .
* create laravel project: composer create-project laravel/laravel folder_name .
* go to folder_name folder: cd folder_name.
* open vs code: code .
* running server: php artisan serve .
* open test folder: local disk C - xampp - htdocs - folder_name.
* show the folder from localhost using google chrome: localhost/folder_name.

## Artisan CLI.
* creating controllers and models.
* creating database migration files and running migration.
* create providers, events, jobs, form requests, etc.
* show routes.
* session commands.
* run tinker.
* create custom commands.

## Artisan commands.
* php artisan list.
* php artisan help migrate.
* php artisan make:controller NewController.
* php artisan make:model NewM -m.
* php artisan migrate.
* php artisan tinker.
* NOTE: to see all php artisan commands we can type "php artisan" on git bash.

# Folder and file modify.
## Model.
* create company model: php artisan make:model company -m.
* migrate: php artisan migrate.
* php artisan make:factory PostFactory.
* php artisan db:seed.
* php artisan make:controller PostController -r.
* php artisan make:resource PostResource
## App.
* after migrate model we can see our file on app-models.
## database.
* to see our migration models we can visit "database - migrations folder".
## Router.
* example route on web.php: 
   - get: "/".
   - get: "/hello".
## ENV.
* database name, password, username.

## Video resource.
https://www.youtube.com/watch?v=3Uy0KRPHQik.

## visual studio extension.
* laravel blade snippets and html snippets.