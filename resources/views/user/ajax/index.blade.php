@extends('user.templates.user-template')

@section('content')

<h3>load more ajax: infinite scroll pagination : not work</h3>
<p>https://www.youtube.com/watch?v=oZTQXVVjbjQ</p>
<div id="post-data">

@foreach ($articles as $article)
<div class="bg-info mb-2"> 
    <h3><a href="{{ $article->path() }}">{{ $article->title }}</a></h3>
    <p class="card-text">{{ $article->excerpt }}</p>
    <p class="card-text text-muted">Last updated {{$article->updated_at}}</p> 
</div>
@endforeach

<div class="ajax-loader" style="display: none">
    loding ....
</div>

</div>
@stop