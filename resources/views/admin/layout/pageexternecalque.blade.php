<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ session('BANK_NAME') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('/dist/css/skins/_all-skins.min.css') }}">

    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="{{ route('home') }}" class="navbar-brand"><b>{{ session('BANK_NAME') }}</b></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content-header')
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <strong>Copyright &copy; 2018 <a href="#">{{ session('BANK_NAME') }}</a>.</strong> Tout droit réservé
        </div>
        <!-- /.container -->
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/dist/js/demo.js') }}"></script>

@yield('js')
</body>
</html>
