<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/google-code-prettify/prettify.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/color/default.css')}}" rel="stylesheet">

</head>
<body>
<div id="app">
    <main class="py-4">
        <header>
            <!-- Navbar
          ================================================== -->
            <div class="navbar navbar-static-top">
                <div class="navbar-inner">
                    <div class="container">
                        <!-- logo -->
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset('img/iconlogi.jpeg')}}" alt="" /></a>
                        </div>
                        <!-- end logo -->

                        <!-- top menu -->
                        <div class="navigation">
                            <nav>
                                <ul class="nav topnav">
                                    @guest
                                    <li>
                                        <a href="{{route('/')}}"><i class="icon-home"></i> Accueil </a>
                                    </li>
                                        <li class="active">
                                            @auth

                                            @else
                                                <a  href="{{ route('login') }}">Se Connecter</a>
                                            @endif
                                        </li>
                                    <li class="dropdown">
                                        <a href="#"><i class="icon-cog"></i> Features <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="icons.html">Icons</a></li>
                                            <li><a href="icon-variations.html">Icon variations</a></li>
                                            <li class="dropdown"><a href="#">3rd level <i class="icon-angle-right"></i></a>
                                                <ul class="dropdown-menu sub-menu">
                                                    <li><a href="#">Example menu</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    @else
                                    <li class="dropdown">
                                        <a href="#"><i class="icon-leaf"></i> {{ Auth::user()->name }}  <i class="icon-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('logement.profilc')}}">Mon Compte</a></li>
                                            <li><a href="{{route('logement.profilres')}}">Mes Reservations</a></li>
                                            <li><a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                        @endguest
                                </ul>
                            </nav>
                        </div>
                        <!-- end menu -->

                    </div>
                </div>
            </div>
        </header>
        @yield('content')
    </main>
</div>

</body>

</html>
