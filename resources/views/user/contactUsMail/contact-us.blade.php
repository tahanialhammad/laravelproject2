@extends('user.templates.user-template')

@section('content')
    <div>
        <h1>contact us mail </h1>
{{-- @if(Session::has('message_sent'))
<div class="alert alert-success">
{{ Session::get('message_sent') }}
</div>

@endif --}}

<form action="{{ route('contact.us') }}" method="POST">
<input type="text" name="name">
<textarea name="message" id="" cols="30" rows="10"></textarea>
<button type="submit" class="btn btn-success">send </button>

</form>

    </div>
@stop
