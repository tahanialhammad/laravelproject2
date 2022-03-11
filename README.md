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


## BLOG V2 ##
- php artisan make:migration create_posts_table  (plural)
- edit table fild
- php artisan migrate
- php artisan make:model Post  (singler)
- from tinker
- php artisan tinker
>> App\models\Post::all();
>> App\models\Post::count();
>> $post = new App\models\Post;
>> $post->title = "first post";
>>  $post->excerpt = "first post excerpt";
>> $post->body = "first post body";
>> $post->save();
- check
>> use App\models\Post;
>> Post::first();
>> Post::find(1); //find by id

- update route 
>> Post::create(['title' => 'second post title','excerpt' => 'second post excerpt','body' => 'second post body' ]);

- L8FS :use id in post show , then use slug in URL show post , update posts table migration, then
- php artisan migrate:fresh
>> Post::create(['slug' =>'first-post' ,'title' => 'first post title','excerpt' => 'first post excerpt','body' => 'first post body' ]);
- post category
-  php artisan make:model Postcategory -m
- php artisan migrate:fresh
- auther v *26 relation between post and user
- post Factories
- php artisan make:factory PostFactory
- php artisan make:factory PostcategoryFactory
- update post factory
- php artisan migrate:fresh --seed 
- post by author
- 

<!-- - Mark as read notification
- php artisan make:notification CommentAdded --markdown=mail.comment.added -->
- php artisan notifications:table
- php artisan migrate
- php artisan make:notification News

-  php artisan make:notification NewPost


xcore
- php artisan notifications:table
- php artisan migrate
- php artisan make:notification Newnews


## Chart.js  
- use https://www.youtube.com/watch?v=rv16bmm9TDY
-  php artisan make:controller DashboardController (niet nodige)
- 