@extends('user.templates.user-template')

@section('content')
    <div>
        <h1>Chart.js</h1>

        <div class="container">
            <graph></graph>
        </div>

        <hr>

        <div class="container p-5">
            <h2>simple chart js direct blade</h2>
            <canvas id="myChart"></canvas>
        </div>

    </div>
@stop
