<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1 align="center">
    Make Tv App
</h1>

## About Project

This is api that shows available applications and translated properties

## Built With

- Laravel
- Php
- Mysql

## Setup

1) Clone the repository and cd into the project directory.

    git clone https://github.com/stefanvitkovic/make_tv.git

    cd make_tv

2) Install dependencies.

    composer install

3) Setup .env

    cp .env.example .env

    php artisan key:generate

Set MySql database credentials.

    DB_DATABASE=make_tv
    DB_USERNAME=root
    DB_PASSWORD=

4) Run the database migrations and seed the database.

    php artisan migrate

    php artisan db:seed

5) Run the development server.

    php artisan serve

## Locale table

In locale table we seed two languages:

    1 => Serbian
    2 => English

## Apps table

In apps table we seed one app:

    1 => Oriontv

## App Properties table

In this table i added two records for orion tv so we can test translation feature.

## Routes

### apps [GET /api/v1/apps?locale=2]
Gets all apps with translated properties name and desc.
Parameter locale is set to be integer for this example and is optional.




