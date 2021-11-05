@extends('user.templates.user-template')

@section('content')

<p>php artisan make:controller StaticPageController</p>

<h1>new repo</h1>
<div class="m-4 ">
<button class="btn btn-dark">test</button>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
</div>
</div>
    <!-- Start Slider -->
    <div class="slider">
        <div id="main-slider" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#main-slider" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#main-slider" data-bs-slide-to="1"></li>
                <li data-bs-target="#main-slider" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner d-flex align-items-center">
                <h1 class="ms-5">Laravel Blog Project tijdenes<br> Bootcamp van <span>CodeGorilla</span><br>2021</h1>
                <div class="overlay"></div>
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1566450653303-2614cbb292ea?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80" alt="" class=" w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1587502537745-84b86da1204f?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
                </div>
            </div>

        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Features -->
    <div class="features py-3">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <i class="fas fa-hands-helping fa-2x rounded-circle"></i>
                    <h3>Duidelijke deal</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fas fa-drafting-compass fa-2x rounded-circle"></i>
                    <h3>Responsive ontwerp</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fas fa-cogs fa-2x rounded-circle"></i>
                    <h3>Onderhoud</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="far fa-lightbulb fa-2x rounded-circle"></i>
                    <h3>Goed idee</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Start Overview  -->
    <div class="overview px-5 py-5 text-center">
        <div class="container">
            <h2 class="text-uppercase mb-4">Bedrijfsoverzicht</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, incidunt veritatis dicta cumque, accusantium numquam modi delectus consequuntur itaque harum deleniti fugiat laudantium sed cupiditate quia iste laborum! Neque, harum?</p>
            <h4 class="text-capitalize fw-lighter my-4">Laten we vandaag beginnen</h4>
            <a href="/articles" class="text-uppercase btn btn-primary">Bekijk meer</a>
        </div>
    </div>
    <!-- End Overview  -->

    <!-- Start Featured-Work  -->
    <div class="featured-work text-center p-5">
        <div class="container">
            <h2 class="text-uppercase mb-4">Uitstekend werk</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, et, debitis est itaque nobis animi enim provident dolorem ullam eum officia soluta doloribus explicabo dolorum, magnam odit sint reiciendis porro.</p>

            <ul class="nav my-4 justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="#">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>

        </div>
        <div class="Shuffle-imgs">
            <div class="row">
                @foreach ($articles as $article)
                <div class="col-md">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Featured-Work  -->

    <!-- Start Choose-us -->
    <div class="choose-us container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img  class="img-fluid" src="https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80" alt="">
            </div>
            <div class="col-md-6 p-5 text-white">
                <h2>Waarom voor ons kiezen</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid impedit in modi. Ea praesentium aperiam culpa odio quibusdam maiores architecto possimus quasi nostrum labore fuga necessitatibus, dignissimos, velit assumenda voluptatem.<br> <br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat nobis ex autem modi in dolorum ad aspernatur? Iste accusantium amet debitis, maiores sint expedita quisquam non perferendis quos incidunt reprehenderit.</p>
                <button class="text-uppercase btn btn-primary mt-4">View More</button>
            </div>
        </div>
    </div>
    <!-- End Choose-us -->

    <!-- Start Latest Post  -->
    <div class="latest-post text-center p-5">
        <div class="container">
            <h2 class="text-uppercase mb-4">Laatste artikelen</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, et, debitis est itaque nobis animi enim provident dolorem ullam eum officia soluta doloribus explicabo dolorum, magnam odit sint reiciendis porro.</p>
            <!-- Start Card Group-->
            <div class="card-group">
                @foreach ($articles as $article)
                <div class="card mx-2">
                    <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text text-truncate">{{ $article->body }}</p>
                    <p class="card-text"><small class="text-muted">{{ $article->created_at}}</small></p>
                    <a href="{{ $article->path() }}" class="card-link">Verder lezen</a>
                    </div>
                </div>
                @endforeach
            </div>
            <!--End card Group-->
        </div>
    </div>
    <!-- End Latest Post  -->

    <!-- Start Testimonials 2 -->
    <div class="testimonials">
        <div class="overlay"></div>
        <div class="container">
            <div id="testimonialscarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#testimonialscarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonialscarousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="inner-item">
                            <img src="http://themes.hody.co/html/bezel/images/testimonial-1.jpg" class="d-block" alt="...">
                            <div class="carousel-caption">
                                <h5>N.Alhammad</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="inner-item">
                            <img src="http://themes.hody.co/html/bezel/images/testimonial-2.jpg" class="d-block" alt="...">
                            <div class="carousel-caption">
                                <h5>H. Mirza</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonialscarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonialscarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- End Testimonials 2 -->

    <!-- Start Contact-us -->
    <div class="contact-us">
        <div class="container p-4">
            <div class="row my-4 ">
                <div class="col-md-8 text-center text-md-left text-white">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <button class="text-uppercase btn btn-outline-primary">Neem contact op</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact-us -->

@stop