@extends('user.templates.user-template')

@section('content')
    <div>
        <h1>Chart.js</h1>
        <div class="container">
            {{-- stap 1 --}}
            {{-- <graph></graph> --}}
            {{-- in stap 2 data uiside vue from prop,in blade V-3 --}}
            {{-- <graph :chartLables="['Aug', 'Sep', 'Nov', 'Dec']" :chartdata="[1,10,8,2]"></graph> werkt niet goed met prop lable --}}

            <graph :chartdata="[1,5,8,2]" chartbgcolor="pink"></graph>

            <h2>anothor chart,not work
                {{-- wee need to read all charts with the same id in canvas --}}
            </h2>
            {{-- <graph :chartdata="[1,5,8,2]"
            chartbgcolor="green"></graph> --}}

            {{-- stap 4/ v5 --}}
            {{-- <graph2 :player="{{ json_encode($tahani)}}" :opponent="{{ json_encode($hashem) }}"></graph2> --}}
            {{-- step 5 /V-5 not need json encode to toString with collection --}}
            <graph2 :player="{{ $tahani }}" :opponent="{{ $hashem }}"></graph2>

            {{-- to make chart template more reusable , V-5  m:10 , i diint tray this --}}

            {{-- v-6 with datbase query/ Render Monthly Revenue --}}
            {{-- but that not work becouese he use strftime old function to collect data --}}
            {{-- <graph3 :keys="{{ $revenue->keys() }}" :value="{{ $revenue->values() }}"></graph3> --}}
            {{-- v7 ajax and graph wil send data --}}
            {{-- <graph4 url='api/revenue'></graph4> --}}
            {{-- v8 parent graph and chiled --}}
            <childgraph url="/api/revenue" ></childgraph>
        </div>

        <hr>

        {{-- <div class="container p-5">
            <h2>simple chart js direct blade</h2>
            <canvas id="myChart"></canvas>
        </div> --}}

    </div>
@stop
