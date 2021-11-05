<!-- Start Upper Bar -->
<nav class="upper-bar">
    <div class="container p-2 text-white">
        <div class="row justify-content-around">
            <div class="col-sm text-center">
                <i class="fa fa-phone"></i> 0625487
                <i class="far fa-envelope"></i>tahani_alhammad@yahoo.com
            </div>
            <div class="col-sm text-center">
                Nederland | Groningen
            </div>
        </div>
    </div>
</nav>
<!-- End Upper Bar -->

<!-- Start Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fw-bold">
    <div class="container">
        <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'home' ? 'active' : ''}}" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'about' ? 'active' : ''}}" href="/about">Over ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'articles' ? 'active' : ''}}" href="/articles">Artikelen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() === 'articles/create' ? 'active' : ''}}" href="/articles/create">Nieuw Artikel</a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- End Main Navbar -->

