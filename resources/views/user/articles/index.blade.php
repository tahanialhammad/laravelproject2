@extends('user.templates.user-template')

@section('content')
{{-- Search form 1 way --}}
<form method="GET" action="#">
    {{-- <input type="text" name="search" placeholder="Search (The Messy Way)" class="w-100"> --}}
    {{-- set value to what we search  step 1, 2--}}
       {{-- Search (The Cleaner Way) step 2-6--}}
    <input type="text" name="search" placeholder="Search (The Messy Way)" class="w-100" value="{{ request('search')}}">

 

    {{--search within categoray :  https://laracasts.com/series/laravel-8-from-scratch/episodes/39 --}}
</form>
<hr>

<livewire:load-more/>
<hr>
<a href="/articles/create" class="btn btn-primary">create new article</a>
<!-- Start Article -->
<div class="container card-group article">
    @foreach ($articles as $article)
    <div class="col-md-6 p-2">
        <div class="card bg-dark text-white" >
        <div class="overlay"></div>
            <img src="{{ $article->image }}" class="card-img" style="height: 15rem;" alt="{{ $article->title }}">
            <div class="card-img-overlay" style="z-index: 3;">
                <h3><a href="{{ $article->path() }}">{{ $article->title }}</a></h3>
                <p class="card-text">{{ $article->excerpt }}</p>
                <p class="card-text text-muted">Last updated {{$article->updated_at}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- End Article -->

@endsection
