<header id="header">
    <nav id="main-menu" class="navbar navbar-expand-lg navbar-dark" role="navigation">
        <div class="left_side_menu">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand ml-2" href="/">Elektro</a>
        </div>

        <ul class="menu-icons navbar-nav d-lg-none flex-row">
            <li data-toggle="collapse" data-target="#search-field" ><svg width="1.5em" height="1.2em" viewBox="0 0 16 16" class="bi bi-search" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"></path>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"></path>
              </svg>
                  </li>
            @guest
                <li class="person_icon pull-right">
                    <a href="{{ route('login') }}">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16"
                            class="bi bi-person-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16"
                            class="bi bi-person-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Odhlásiť sa') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

            <li class="cart-icon pull-right">
            <a href="{{route('cart1')}}">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart-plus-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                    </svg>
                    @if(Session::has('cart') && Session::get('cart')->quantity)
                        <span class="cart-notification">{{ Session::get('cart')->quantity }}</span>
                    @endif
                </a>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto text-center">
                <li class="nav-item {{ (request()->routeIs('home')) ? 'active' : ''}}">
                    <a class="nav-link" href="/">Novinky<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{(request()->routeIs('category')&&request('id')==1) ? 'active' : ''}}">
                <a class="nav-link" href="{{route('category',['id'=>1])}}">Telefóny</a>
                </li>
                <li class="nav-item {{(request()->routeIs('category')&&request('id')==2) ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('category',['id'=>2])}}">Notebooky</a>
                </li>
                <li class="nav-item {{(request()->routeIs('category')&&request('id')==3) ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('category',['id'=>3])}}">Príslušenstvo</a>
                </li>
                @auth
                @if(Auth::user()->admin)
                    <li>
                        <a class="nav-link" href="/admin">Admin<span class="sr-only"></span></a>
                    </li>
                @endif
                @endauth
            </ul>
            <form class="search-form form-inline my-2 my-lg-0 flex-row flex-nowrap d-none d-lg-flex" action="/search" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="Hľadať" aria-label="Search" name="q">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Hľadať</button>
            </form>
        </div>
        <ul class="menu-icons menu-icons-desktop navbar-nav flex-row">
            @guest
                <li class="person_icon pull-right">
                    <a href="{{ route('login') }}">
                        <svg width="2em" height="2em" viewBox="0 0 16 16"
                            class="bi bi-person-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Odhlásiť sa') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

            <li class="cart-icon pull-right">
                <a href="{{route('cart1')}}">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart-plus-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                    </svg>
                    @if(Session::has('cart') && Session::get('cart')->quantity)
                        <span class="cart-notification">{{ Session::get('cart')->quantity }}</span>
                    @endif
                </a>
            </li>
        </ul>
    </nav>
    <form id="search-field" class="search-form d-lg-none collapse" action="/search" method="get">
        <input class="form-control" type="search" placeholder="Hľadať" aria-label="Search" name="q">
        <button class="btn btn-outline-light my-1 btn-next p-1" type="submit">Hľadať</button>
    </form>
</header>


