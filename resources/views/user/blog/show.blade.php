@extends('user.templates.user-template')

@section('content')
    <div>
        <h1>Blog V2 show page</h1>

        <h3>Title: <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h3>
        {{-- <a href="/postcategories/{{ $post->postcategory->id }}">category : {{ $post->postcategory->name }}</a> --}}
    <a href="/postcategories/{{ $post->postcategory->slug }}">category : {{ $post->postcategory->name }}</a>
  {{-- <h5> Posted by <a href="/postauthors/{{ $post->user->id }}" class="badge bg-secondary"> {{ $post->user->name }} </a></h5> --}}
  {{-- <h5> Posted by <a href="/authors/{{ $post->author->id }}" class="badge bg-secondary"> {{ $post->user->name }} </a></h5> --}}
 
    <p>{{ $post->excerpt }}</p>
    
    </div>
@stop
