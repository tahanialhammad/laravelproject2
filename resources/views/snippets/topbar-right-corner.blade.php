<div>
    <div class="d-flex align-items-center">
        @auth
            <div> {{ Auth::user()->name }}</div>



            {{-- this work --}}
            {{-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <button type="button" class="btn btn-primary p-0 position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        @if (auth()->user()->unReadNotifications->count())
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">
                            {{ auth()->user()->unReadNotifications->count() }}
                          </span>
                        @endif
                    </button>
                </button>


                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="btn btn-dark" href="{{ route('markRead') }}">mark as read</a></li>
                    <li>un read notification</li>
                    @foreach (auth()->user()->unreadNotifications as $notification)
                        <li class="text-danger">{{ $notification->data['data'] }}</li>
                    @endforeach
                    <hr>
                    <li>All Notification</li>
                    @foreach (auth()->user()->notifications as $notification)
                    <li>{{ $notification->data['data'] }}</li>
                @endforeach
                </ul>
            </div> --}}




            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <button type="button" class="btn btn-primary p-0 position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        @if (auth()->user()->unReadNotifications->count())
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">
                                {{ auth()->user()->unReadNotifications->count() }}
                            </span>
                        @endif
                    </button>
                </button>


                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="btn btn-dark" href="{{ route('markRead') }}">mark as read</a></li>
                    <li>un read notification</li>
                    @foreach (auth()->user()->unreadNotifications as $notification)
                        <li class="text-danger">{{ $notification->data['body'] }}</li>
                    @endforeach
                    <hr>
                    <li>All Notification</li>
                    @foreach (auth()->user()->notifications as $notification)
                        <li>{{ $notification->data['body'] }}</li>
                    @endforeach
                </ul>
            </div>
        @else
            <div>Account</div>
        @endauth
        <div class="dropdown">
            <button class="btn btn-link p-0 ms-3 shadow-none" type="button" id="moreDropdownMenu"
                data-bs-toggle="dropdown" aria-expanded="false">
                <svg id="icon-info" class="icon-lg icon-dark" viewBox="0 0 13 13">
                    <path
                        d="M6.5 8.3c-.4 0-.7.3-.7.7 0 .4.3.7.7.7.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7zm.1-5.1c-1.3 0-2 .8-2.1 2.1h1.1c0-.6.3-.9.8-.9s.8.2.8.7C7.2 6 6 5.9 6 7.4h1.1c0-1.2 1.5-1.2 1.5-2.6-.1-1.1-.8-1.6-2-1.6z" />
                    <path
                        d="M6.5 1.2c2.9 0 5.2 2.4 5.2 5.2s-2.4 5.2-5.2 5.2-5.3-2.2-5.3-5.1 2.4-5.3 5.3-5.3m0-1.2C2.9 0 0 2.9 0 6.5S2.9 13 6.5 13 13 10.1 13 6.5 10.1 0 6.5 0z" />
                </svg>
            </button>

            <!-- Right Side Of Navbar -->
            <ul class="dropdown-menu border-0 shadow-sm p-4 mt-2 mb-5 bg-body fs-sm" aria-labelledby="moreDropdownMenu"
                style="width: 220px">
                @guest
                    @if (Route::has('login'))
                        <li>
                            <a class="dropdown-item px-0 py-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li>
                            <a class="dropdown-item px-0 py-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a class="dropdown-item px-0 py-1" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item px-0 py-1" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</div>
