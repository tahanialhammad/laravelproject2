@extends('layouts.app')

@section('content')

{{-- php artisan make:model Category -m       to creat model en migration in v-24 laravel 8 from scratch--}}
{{-- in migration database we make table for category with name en slug --}}
{{-- and refresh database     php artisan migrate:fresh --}}
{{-- ik ga category maken via tinker , that can be from db or seeder --}}
{{-- tinker --}}
{{-- vagrant@homestead:~/code/laravelproject2$ php artisan tinker
Psy Shell v0.10.6 (PHP 7.4.16 — cli) by Justin Hileman
>>> use App\models\Category;
>>> $c = new Category;
=> App\Models\Category {#3539}
>>> $c->name = 'Personal';
=> "Personal"
>>> $c->slug = 'personal';
=> "personal"
>>> $c->save();
=> true
>>> --}}

{{-- but now i want to use seeder --}}




{{-- category --}}


<!-- Start Article -->
<div class="container card-group article">
    @foreach ($articles as $article)
    <div class="col-md-6 p-2">
        <div class="card bg-dark text-white" >
        <div class="overlay"></div>
            <img src="{{ $article->image }}" class="card-img" style="height: 15rem;" alt="{{ $article->title }}">
            <div class="card-img-overlay" style="z-index: 3;">
                <h3><a href="{{ $article->path() }}">{{ $article->title }}</a></h3>
                <a href="" class="bg-danger">Category: {{ $article->category->name }}</a>
                <p class="card-text">{{ $article->excerpt }}</p>
                <p class="card-text text-muted">Last updated {{$article->updated_at}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- End Article -->

@endsection
