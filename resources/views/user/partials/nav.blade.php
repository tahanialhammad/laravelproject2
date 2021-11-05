{{-- =========== Start new Xcore ============== --}}
<nav class="h-100 overflow-hidden">
    <div>
        <!-- brand -->
        <div class="mt-4">
            <a href="/">
                <div class="SidebarLogo"></div>
            </a>
        </div>
        <!-- / brand -->

        <ul class="nav flex-column flex-nowrap text-capitalize mt-5">
            <li class="nav-item ">
                <a class="nav-link d-flex align-items-center text-white" href="">
                    <svg class="icon icon-inverted" viewBox="0 0 11.6 11.6">
                        <path d="M5.8 1.6l4.5 3.7v4.9h-9V5.4l4.5-3.8m0-1.6L0 4.8v6.8h11.6V4.8L5.8 0z" class="st0"/>
                    </svg>
                    <span class="ps-3">{{ trans('menu.dashboard') }}</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a class="nav-link d-flex align-items-center text-white" href="">
                    <svg id="icon-store" class="icon icon-inverted" viewBox="0 0 14.7 13.8">
                        <path d="M11.9 11.5c-.6 0-1.2.5-1.2 1.2 0 .6.5 1.2 1.2 1.2s1.2-.5 1.2-1.2-.5-1.2-1.2-1.2zm2.2-9.4H3.9L3.4.4C3.3.2 3.1 0 2.8 0H.6C.3 0 0 .3 0 .6s.3.6.6.6h1.7l2.2 7.2c-.3.4-.6 1.2-.3 1.9.5.8 1.6.8 1.7.8h6.9c.3 0 .6-.3.6-.6s-.3-.6-.6-.6H6c-.2 0-.6-.1-.6-.2s0-.2.1-.4l7.7-.9c.3 0 .5-.2.5-.5l1-5.2c0-.2 0-.4-.1-.5-.2-.1-.3-.1-.5-.1zm-1.5 5.2l-6.9.8-1.4-4.8h9.1l-.8 4z"/>
                        <circle cx="5.2" cy="12.7" r="1.2"/>
                    </svg>
                    <span class="ps-3">{{ trans('menu.appstore') }}</span>
                </a>
            </li>


            
            
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center text-white" href="">
                    <svg id="icon-apps" class="icon icon-inverted" viewBox="0 0 11.9 11.9">
                        <path d="M4.1 1.3v2.8H1.3V1.3h2.8M4.3 0H1C.5 0 0 .5 0 1v3.3c0 .5.5 1 1 1h3.3c.5 0 1-.5 1-1V1c0-.5-.4-1-1-1zm6.3 7.8v2.8H7.8V7.8h2.8m.3-1.3H7.5c-.5 0-1 .4-1 1v3.3c0 .6.5 1 1 1h3.3c.5 0 1-.4 1-1V7.5c.1-.5-.4-1-.9-1zm-.3-5.2v2.8H7.8V1.3h2.8m.3-1.3H7.5c-.5 0-1 .5-1 1v3.3c0 .5.5 1 1 1h3.3c.5 0 1-.5 1-1V1c.1-.5-.4-1-.9-1zM4.1 7.8v2.8H1.3V7.8h2.8m.2-1.3H1c-.5 0-1 .4-1 1v3.3c0 .6.5 1 1 1h3.3c.5 0 1-.4 1-1V7.5c0-.5-.4-1-1-1z"
                              class="st0"/>
                    </svg>
                    <span class="ps-3">{{ trans('menu.myapps') }}</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a class="nav-link  d-flex align-items-center text-white" href="">
                    <svg id="icon-rapportages" class="icon icon-inverted" viewBox="0 0 11.5 12.7">
                        <path d="M11.5 5.5L5.9 0H0v12.7h11.5V5.5zm-5.8-4l3.4 3.4H7c-.8 0-1.4-.6-1.4-1.4v-2zm4.5 10h-9V1.3h3.2v2.3C4.4 5 5.6 6.2 7 6.2h3.2v5.3z"/>
                    </svg>
                    <span class="ps-3">{{ trans('menu.reports') }}</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link d-flex align-items-center text-white notification-icon"
                   href="">
                    <svg id="icon-talk" class="icon icon-inverted" viewBox="0 0 11.86 11.86">
                        <path d="M9.86 1.25c.41 0 .75.34.75.75v5.47c0 .41-.34.75-.75.75H4.25l-.28.14-2.72 1.43V2c0-.41.34-.75.75-.75h7.86m0-1.25H2C.9 0 0 .9 0 2v9.86l4.55-2.39h5.31c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2z"/>
                    </svg>

                    <svg class="unread-notification">
                        <circle cx="50" cy="50" r="8"/>
                    </svg>
                    <span class="ps-3">{{ trans('menu.news') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center text-white notification-icon"
                   href="">
                    <svg id="icon-releases" class="icon icon-inverted" viewBox="0 0 11.2 11.4">
                        <path d="M5.6 1.8l2.6 2.7H3l2.6-2.7m0-1.8L0 5.7h11.2L5.6 0zm0 7c-.4 0-.8.3-.8.8 0 .4.4.8.8.8s.8-.4.8-.8c0-.5-.3-.8-.8-.8zm0 2.8c-.4 0-.8.4-.8.8s.4.8.8.8.8-.4.8-.8-.4-.8-.8-.8z"/>
                    </svg>
                    <svg class="unread-notification">
                        <circle cx="50" cy="50" r="8"/>
                    </svg>
                    <span class="ps-3">{{ trans('menu.releases') }}</span>
                </a>
            </li>

      
      

            <li class="nav-item ">
                <a class="nav-link d-flex align-items-center text-white" href="">
                    <svg id="icon-info" class="icon icon-inverted" viewBox="0 0 13 13">
                        <path d="M6.5 8.3c.4 0-.7.3-.7.7 0 .4.3.7.7.7.4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7zm.1-5.1c-1.3 0-2 .8-2.1 2.1h1.1c0-.6.3-.9.8-.9s.8.2.8.7C7.2 6 6 5.9 6 7.4h1.1c0-1.2 1.5-1.2 1.5-2.6-.1-1.1-.8-1.6-2-1.6z"/>
                        <path d="M6.5 1.2c2.9 0 5.2 2.4 5.2 5.2s-2.4 5.2-5.2 5.2-5.3-2.2-5.3-5.1 2.4-5.3 5.3-5.3m0-1.2C2.9 0 0 2.9 0 6.5S2.9 13 6.5 13 13 10.1 13 6.5 10.1 0 6.5 0z"/>
                    </svg>
                    <span class="ps-3">helpcenter</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center text-white notification-icon" href="#">
                    <svg id="icon-sla" class="icon icon-inverted" viewBox="0 0 13.8 13.1">
                        <path d="M6.9 2.8l1 2c.2.4.5.6.9.7l2.2.3-1.6 1.7c-.3.2-.4.7-.3 1.1l.4 2.2-2-1.1c-.2-.1-.4-.1-.6-.1s-.4 0-.6.1l-2 1.1.4-2.2c.1-.4-.1-.8-.4-1.1L2.7 5.9l2.2-.3c.4-.1.8-.3.9-.7l1.1-2.1m0-2.8L4.8 4.3 0 5l3.4 3.4-.8 4.7 4.2-2.2 4.2 2.2-.8-4.7L13.8 5 9 4.3 6.9 0z"/>
                    </svg>
                    <span class="ps-3">SLA
                        <span class="ms-2 badge rounded-pill bg-secondary">zilver</span>
                    </span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link d-flex align-items-center text-white notification-icon"
                   href="">
                    <svg id="icon-account" class="icon icon-inverted" viewBox="0 0 10 11.9">
                        <path d="M5 1.3c1 0 1.7.7 1.7 1.7S6 4.8 5 4.8 3.2 4 3.2 3 4 1.3 5 1.3M5 0C3.3 0 2 1.3 2 3s1.3 3 3 3 3-1.3 3-3-1.3-3-3-3zm5 11.9H8.7V9.5c0-.8-.6-1.4-1.4-1.4H2.6c-.8 0-1.4.6-1.4 1.4v2.4H0V9.5C0 8 1.2 6.9 2.6 6.9h4.7C8.8 6.9 10 8 10 9.5v2.4z"/>
                    </svg>

                    <span class="ps-3">{{ trans('menu.my_account') }}</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
{{-- =========== End new Xcore ============== --}}