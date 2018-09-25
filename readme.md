<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Project Info

A laravel project integrated with AdminLTE theme. This is the starter project having individual login and database tables user and admin. 

<a href="http://rakeshmallesh.com/blog/">Blog</a>

## Installation

1- Change file name .env-example to .env and change the database configuration

2- Composer Install 

    ```
    php composer install
    ```

3- Generate Key

    ```
    php artisan key:generate
    ```

4- Run migration and seed data

    ```
    php artisan migrate --seed
    ```
