@extends('user.templates.user-template')

@section('content')

welcom page
<info></info>
<Info></Info>
<h3>users in db</h3>
<ul>
    @foreach($users as $user)
        <li>{{ $user->name}}</li>
    @endforeach
</ul>
<p>show the pagination in laravel</p>
<div>{{ $users->links() }}</div>


@stop