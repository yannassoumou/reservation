@extends('layouts.master')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('title')
    <h1>
        Bienvenue Sur Tceici
    </h1>

    <ol class="breadcrumb">
        <li><a href="{{route('accueil')}}"><i class="fa fa-home"></i> Accueil</a></li>
        <li><a href="">Reservation de Ticket</a></li>
        {{--<li class="active">Creation de contrat</li>--}}
    </ol>
@endsection

@section('content')
 <div class="box box-primary">
     <div class="box-header with-border">
         <h3 class="box-title">Reserver Mon Ticket </h3>
     </div>
     <!-- /.box-header -->
     <!-- form start -->
     <form role="form">
     {{--    <div class="box-body">
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <label for="exampleInputEmail1">Email address</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputPassword1">Password</label>
                         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputFile">File input</label>
                         <input type="file" id="exampleInputFile">

                         <p class="help-block">Example block-level help text here.</p>
                     </div>
                     <div class="checkbox">
                         <label>
                             <input type="checkbox"> Check me out
                         </label>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <label for="exampleInputEmail1">Email address</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputPassword1">Password</label>
                         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputFile">File input</label>
                         <input type="file" id="exampleInputFile">

                         <p class="help-block">Example block-level help text here.</p>
                     </div>
                     <div class="checkbox">
                         <label>
                             <input type="checkbox"> Check me out
                         </label>
                     </div>
                 </div>

             </div>

--}}
         @foreach($trs as $trse)

             @if ($trse->numero == $numero_ticket)

         <div class="box box-info">
             <div class="box-header with-border">
                 <h3 class="box-title">{{$trse->lib_agence}}</h3>
             </div>
             <!-- /.box-header -->
             <!-- form start -->

             <div class="box-body">
                 <div class="container">
                     {{--Boucle a l'aide de la BD concernant les compagnies--}}
                     <div class="row">
                         <div class="col-sm-4">
                             <div class="panel panel-primary">
                                 <div class="panel-heading">
                                     <h4>{{$trse->numero}}</h4>
                                 </div>
                                 <div class="panel-body">
                                     <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                                     <p>{{$trse->lib_dest}}</p>
                                     <p>{{$trse->title}}</p>
                                     <p>{{$trse->prix}}</p>
                                 </div>
                                 <input hidden value="1" name="id_ticket">
                                 <div class="panel-footer">
                                     <a href="{{route('reserver',[$trse->numero])}}" class="">Reserver!</a>
                                 </div>
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label>Jour de reservation:</label>

                                 <div class="input-group">
                                     <div class="input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                     </div>
                                     <input type="Date" class="form-control pull-right" id="reservation">
                                 </div>
                                 <!-- /.input group -->
                             </div>
                             <div class="form-group">
                                 <label>Heure de depart:</label>

                                 <div class="input-group date">
                                     <div class="input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                     </div>
                                     <input type="datetime-local" class="form-control pull-right" id="datepicker">
                                 </div>
                                 <!-- /.input group -->
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
             <!-- /.box-body -->
             <div class="box-footer">
                 <button type="submit" class="btn btn-default">S'abonner</button>
                 <button type="submit" class="btn btn-info pull-right">Voir les autres destination</button>
             </div>
             <!-- /.box-footer -->
         </div>
         <!-- /.box-body -->

         <div class="box-footer">
             <button type="submit" class="btn btn-primary">Submit</button>
         </div>
     </form>
 </div>
 @endif
@endforeach
@endsection
@section('js')
    <!-- DataTables -->
    <script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
            $('#reservation').daterangepicker()
        })
    </script>
@endsection
