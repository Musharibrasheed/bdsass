# Manage Films

## APIs:

Must put these APIs constants on .env file.

-   BUCKET_URL = http://127.0.0.1:8080/film/images
-   FILM_LIST = http://127.0.0.1:8080/api/films
-   FILM_ADD = http://127.0.0.1:8080/api/films

## User Credentials:

-   user : john@gmail.com
-   pass : john@gmail.com
    <br>
    <br>
-   user : jack@gmail.com
-   pass : jack@gmail.com

## Note:

Run this command on terminal to start to access APIs.

-   php artisan serve --port=8080

Run this command on terminal to use application.

-   php artisan serve

## Setup Guidline:

Follow these steps to setup application:

-   Go to this github repo https://github.com/Musharibrasheed/bdsass
-   Go to project directory and run this command on terminal: git clone https://github.com/Musharibrasheed/bdsass.git .
-   Run on terminal: composer install
-   Run on terminal: cp .env.example .env
-   Run on terminal: php artisan key:generate
-   Set enviroment variable in .env

    DB_CONNECTION=mysql

    DB_HOST=127.0.0.1

    DB_PORT=3306

    DB_DATABASE=laravel

    DB_USERNAME=root

    DB_PASSWORD=

    BUCKET_URL = http://127.0.0.1:8080/film/images

    FILM_LIST = http://127.0.0.1:8080/api/films

    FILM_ADD = http://127.0.0.1:8080/api/films

-   Run on terminal: php artisan migrate --seed
-   Finally starts servers:
-   php artisan serve --port=8080
-   php artisan serve
