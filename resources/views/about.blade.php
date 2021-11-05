@extends('layouts.app')

@section('content')
<div class="about container">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <info  city="Groningen" address="sumatralaan">
                    <template slot="firstname">Tahani</template>
                    <template slot="lastname">Ali</template>
                    WEBDEVELOER
                </info>
            </div>
            <!-- <icons></icons> -->
            <img src="images/linkedin.jpg" alt="" class="img-fluid mb-2" />
            <p>Ik ben Tahani Alhammad woon in Groningen en kom oorspronkelijk uit Irak, waar ik computer engineer was. Bestond mijn werk daar voornamelijk uit onderzoek naar o.a. netwerkapparaten, inmiddels weet ik dat ik de kant van front end developer op wil. Hoewel mijn passie daar ligt, heb ik ook interesse in de back end-kant van programmeren. Ik vond CodeGorilla-avontuur als een van de tofste dingen die ik ooit heeft gedaan. Mijn programmertalen zijn : HTML5/CSS3, SASS, Bootstrap, JS, NodeJS, Express, EJS, VueJs, JSON, Mongoose, MongoDB, PHP, MySQL en Laravel</p>
        </div>
        <div class="col-md-4">
            <div class="container article">
                <ul class="list-group">
                    @foreach ($articles as $article)
                    <li class="list-group-item">
                        <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
                        <p>{{ $article->excerpt }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
