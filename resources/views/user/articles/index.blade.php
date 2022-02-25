@extends('user.templates.user-template')

@section('content')
@include('user.articles.partials.filter')

{{-- Category L8FS  v-24, 25 --}}
{{-- php artisan make:model Category -m       to creat model en migration inL8FS  v-24 laravel 8 from scratch--}}
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

{{-- new rout to show all posts by category --}}
{{-- to check relation between post and category from termina via tinker --}}
{{-- vagrant@homestead:~/code/laravelproject2$ php artisan tinker
Psy Shell v0.10.6 (PHP 7.4.16 — cli) by Justin Hileman
>>> App\models\Category::first();
.....
>>> App\models\Category::first()->articles;
to finde post assocceted with this category
 --}}

{{-- seedin php artisan db:seed or  --}}
<a href="/articles/create" class="btn btn-primary">create new article</a>
<!-- Start Article -->
<div class="container card-group article">
    @foreach ($articles as $article)
    <div class="col-md-6 p-2">
        <div class="card bg-dark text-white" >
        <div class="overlay"></div>
            <img src="{{ $article->image }}" class="card-img" style="height: 15rem;" alt="{{ $article->title }}">
            <div class="card-img-overlay" style="z-index: 3;">
                <h3><a class="text-white" href="{{ $article->path() }}">{{ $article->title }}</a></h3>
    
                <a href="" class="badge bg-secondary">Category: {{ $article->category->name }}</a>
                <span class="text-muted">Posted by 
                    <a href="/authors/{{ $article->author->id }}" class="badge bg-secondary"> {{ $article->author->name }} </a>
                    {{-- OR but not work jet L8FS  v-29 stop it now--}}
                    <a class="text-white" href="/authors/{{ $article->author->username }} ">
                    {{ $article->user->name }} 
                </a>
                </span>
                <p class="card-text">{{ $article->excerpt }}</p>
                <p class="card-text text-muted">Last updated {{$article->updated_at}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- Pagination --}}
<div>
    @if($articles->count())
    {{ $articles->links() }}
@endif
</div>
<!-- End Article -->

@include('user.articles.partials.loadmore')

@endsection
