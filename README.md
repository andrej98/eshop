<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Eshop
## Description
This project is an eshop built in PHP framework Laravel. It is a regular eshop where customers can browse products, filter them based on different criteria, and buy the products.
Users can buy products with or without registration. 

It also contains admin dashboard built in Vue.js after logging in as admin. Admin users can add, edit and delete products including their images.

## How to run it locally
Install dependencies:
```bash
composer install
```
Create the .env file with connection to database and other variables (see .env.example)

Migrate database:
```bash
php artisan migrate
```
Create storage link:
```bash
php artisan storage:link
```
To run the application:
```bash
php artisan serve
```

Application should run on 127.0.0.1:8000
