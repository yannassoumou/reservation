
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
   <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/appu.css')}}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>TG</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Carry</b>Tg</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <p style="text-align: center; color:orange;">Horloge Depart</p>
      <p style="text-align: center; color:orange;" id="heure"></p>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{url('/')}}"><i class="fa fa-file"></i> <span>Accueil</span></a></li>
        <li><a href="{{url('/logements')}}"><i class="fa fa-file"></i> <span>Logement</span></a></li>
        <li class="">


           <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
             <i class="fa fa-power-off text-red"></i>   <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content container-fluid">
        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <button id="load">test</button>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
</div>



<script src="{{asset('js/appu.js')}}"></script>

<script>

  var date = new Date();

document.getElementById("heure").innerHTML= date.toGMTString();


    $('#edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var title = button.data('mytitle')
        var description = button.data('mydescription')
        var cat_id = button.data('catid')
        /**/
        var zone = button.data('zone')
        var ville = button.data('ville')
        var gare_id = button.data('gareid')
       /**/
        var idgareagence = button.data('id_gare_agence')
        var compagnie = button.data('compagnie')
        var libagence = button.data('libagence')
        var agcid = button.data('agcid')
/**/
        var libdest=button.data('libdest')
        var destid=button.data('destid')
        /**/
        var  numero= button.data('numero')
        var  prix = button.data('prix')
        var idagenceticket = button.data('idagenceticket')
        var iddestinationticket = button.data('iddestinationticket')
        var idcategorieticket = button.data('idcategorieticket')
        var tckid = button.data('tckid')

        var modal = $(this)
        /*Partie Categorie*/
        modal.find('.modal-body #title').val(title);
        modal.find('.modal-body #des').val(description);
        modal.find('.modal-body #cat_id').val(cat_id);
        /*Partie Gare*/
        modal.find('.modal-body #zone').val(zone);
        modal.find('.modal-body #ville').val(ville);
        modal.find('.modal-body #gare_id').val(gare_id);
        /*Partie Agence*/
        modal.find('.modal-body #compagnie').val(compagnie);
        modal.find('.modal-body #lib_agence').val(libagence);
        modal.find('.modal-body #id_gare_agence').val(idgareagence);
        modal.find('.modal-body #agc_id').val(agcid);
        /*Partie de destination*/
        modal.find('.modal-body #dest_id').val(destid)
        modal.find('.modal-body #lib_dest').val(libdest)
        /*Partie Ticket*/
        modal.find('.modal-body #numero').val(numero);
        modal.find('.modal-body #prix').val(prix);
        modal.find('.modal-body #id_agence_ticket').val(idagenceticket);
        modal.find('.modal-body #id_destination_ticket').val(iddestinationticket);
        modal.find('.modal-body #id_categorie_ticket').val(idcategorieticket);
        modal.find('.modal-body #tck_id').val(tckid);


    })


    $('#delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var cat_id = button.data('catid')
        /**/
        var gare_id = button.data('gareid')
        /**/
        var agcid = button.data('agcid')
        /**/
        var destid=button.data('destid')
  /**/
        var tckid=button.data('tckid')

        var modal = $(this)

        modal.find('.modal-body #gare_id').val(gare_id);
        modal.find('.modal-body #cat_id').val(cat_id);
        modal.find('.modal-body #agc_id').val(agcid);
        modal.find('.modal-body #dest_id').val(destid);
        modal.find('.modal-body #tck_id').val(tckid);
    })
 /* var isLoaded = 0; //Set the flag OFF

  $(document).ready(function() {

      $("#load").click(function(){
          if(isLoaded){ //If flag is ON then return false
              alert("File already loaded");
              return false;
          }
          $.getScript('js/app.js', function() {
              isLoaded = 1; //Turn ON the flag
              alert('bim')

          });
      });

  });*/

</script>
</body>

</html>