<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About LaravelBlog

laravel Blog / feb 2021

- [Tahani Alhammad linkedIn ](https://www.linkedin.com/in/tahanialhammad/).
- [Tahani Alhammad Behance ](https://www.behance.net/tahani-ali-alhammad).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


### Premium Partners

- **[Tailwindcss](https://tailwindcomponents.com/)**



## Code Steps

- composer require laravel/ui --dev
- php artisan ui vue --auth-
- npm install && npm run dev
- php artisan migrate:fresh --seed
- to use factory manula from terminal 
php artisan tinker
>>> App\models\User::factory()->create();
or
App\models\User::factory(50)->create();

- the artical ,tags factory not work , so i tray to make anew one for category 
- php artisan make:factory CategoryFactory
-  php artisan make:model Comment -mf      to make model factory migration
- i can use laracast style from talwind in V-31-32-33
