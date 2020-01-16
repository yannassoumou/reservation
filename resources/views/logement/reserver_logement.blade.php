@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row col-md-offset-3 col-md-6">
            <h1>Fiche du Logement</h1>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Nom du logement</h3>
                </div>
                <div class="panel-body">
                    {{ $app->libelle }}
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Heures d'ouverture</h3>
                </div>
                <div class="panel-body">
                {!! Form::open(['route' => ['logement.update'], 'method' => 'post']) !!}

                    @foreach($appdays as $day)
                            <strong>{{ $day->name }} :</strong><br>
                            <ul>
                                    <li>{{ $day->start_time }} à {{ $day->end_time }} <input type="radio" name="choix" value="{{$day->id}}"></li>
                              </ul>
                       @endforeach
                    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
