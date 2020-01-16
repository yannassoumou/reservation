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
        {{--<li><a href="#">Gestion de l'embauche</a></li>
        <li class="active">Creation de contrat</li>--}}
    </ol>
@endsection

@section('content')
    <div class="col-md">
        <div class="box box-solid">
        {{-- <div class="box-header with-border">
             <h3 class="box-title">Carousel</h3>
         </div>--}}
        <!-- /.box-header -->
            <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item">
                            <img src="http://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap" alt="First slide">

                            <div class="carousel-caption">
                                First Slide
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">

                            <div class="carousel-caption">
                                Second Slide
                            </div>
                        </div>
                        <div class="item active">
                            <img src="http://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">

                            <div class="carousel-caption">
                                Third Slide
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                    </a>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Nom de la compagnie</h3>
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
                                <h4>Titre Ticket</h4>
                            </div>
                            <div class="panel-body">
                                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                                <p>Nom/p>
                            </div>
                            <input hidden value="1" name="id_ticket">
                            <div class="panel-footer">
                                <a href="{{route('reserver',['1'])}}" class="">Reserver!</a>
                            </div>
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
                })
            </script>
@endsection