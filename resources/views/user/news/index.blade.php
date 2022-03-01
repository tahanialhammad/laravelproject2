@extends('user.templates.user-template')

@section('content')
    <div>
        <h1>news notification</h1>

        {{-- @dump(auth()->user()->notifications); --}}
        
        {{-- <ul>
            @foreach (auth()->user()->notifications as $notification)
            <li>{{ $notification->data['data'] }}</li>
        @endforeach
        </ul>
       --}}


    </div>
@stop
