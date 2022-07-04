# Laravel-NotesApp
Notes application built using Laravel 

## Frameworks Used

- Laravel (PHP MVC Framework)
- Vue.js (Javascript Framework)
- Bootstrap (CSS)


- MySql
- PHP


## Steps to install App with docker

- Step 1: git clone https://github.com/Dileep4656/Laravel-NotesApp.git
- Step 2: Run `Composer update` in app root directory 
- Step 3: cp .env.example .env
- Step 4: Generate key using artisan command `php artisan key:generate`
- Step 5: Please update the following values in .env file 

          DB_CONNECTION=mysql
          DB_HOST=mysql
          DB_PORT=3306
          DB_DATABASE=note_app
          DB_USERNAME=sail
          DB_PASSWORD=password
          
- Step 6: Run `./vendor/bin/sail up` in app root directory
- Step 7: In App Container CLI run `php artisan migrate`
 
     Note : If you get database connectivity error after running the `php artisan migrate`. Please run this command in app root directory `./vendor/bin/sail down --rmi all -v` and then run again './vendor/bin/sail up'

- Step 8: http://localhost/#/notes



