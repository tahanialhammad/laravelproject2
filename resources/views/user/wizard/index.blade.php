@extends('user.templates.user-template')

@section('content')

    <h1>wizard select option </h1>



    <div class="card m-4 p-4">
        <div class="card-header bg-transparent border-light">
            <h3>Installatie keuze</h3>
        </div>

        <div>
            <form action="{{ route('createoption') }}" method="POST">

                @csrf

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="option" value="wizard" id="wizard" checked>
                    <label class="form-check-label" for="wizard">
                        wizard
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="option" value="service" id="service">
                    <label class="form-check-label" for="service">
                        service
                    </label>
                </div>

                <button type="submit" class="btn btn-danger">submit</button>
            </form>
        </div>
    </div>

@stop

@section('extra-footer-scripts')

@stop

