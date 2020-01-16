<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation - Chercher Reserver Poursuivez</title>


    <!-- Template Main CSS File -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">
    <!-- styles -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/google-code-prettify/prettify.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/color/default.css')}}" rel="stylesheet">

    {{-- <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

 --}}

</head>
<body>

@auth


@else
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">

                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>