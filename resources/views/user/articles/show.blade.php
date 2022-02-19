@extends('user.templates.user-template')

@section('content')

{{-- <a href="{{ route('articles.edit') }}" class="btn btn-primary">create new article</a> --}}

<div class="container article">
    <div>
        <h2>{{ $article->title }}</h2>
        <span class="text-muted">Posted by 
            <a class= "bg-info" href="/authors/{{ $article->author->username }} ">
            {{ $article->user->name }} 
        </a>
        </span>
    </div>
    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="img-fluid" />
    <p>{{ $article->body }}</p>

    <div>
        <p>
            @foreach ($article->tags as $tag)
            <a class="btn btn-outline-primary btn-sm" href="{{ route('user.articles.index', [ 'tag'=> $tag->name ]) }}"><i class="fas fa-tag"></i> {{ $tag->name }}</a>
            @endforeach
        </p>
    </div>

    @can ('update-article', $article)
    <form action="/articles/{{ $article->id }}/edit" method="GET">
        @csrf
        <button class="btn btn-primary">Upadet Article</button>
    </form>
    @endcan
</div>

@endsection
