{{--@extends('layouts.goodentete')--}}
@extends('layouts.template')
@section('content')

    <h1>Mes Reservations</h1>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td class="text-primary"><strong>{{ $d->id }}</strong></td>
                <td>{!! link_to_route('logement.show', 'Voir', [$d->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                <td>{!! link_to_route('logement.edit', 'Modifier', [$d->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['logement.destroy', $d->id]]) !!}
                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce restaurant ?\')']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/raphael-min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('assets/js/jquery.elastislide.js')}}"></script>
<script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/js/jquery-hover-effect.js')}}"></script>
<script src="{{asset('assets/js/animate.js')}}"></script>

<!-- Template Custom JavaScript File -->
<script src="{{asset('assets/js/custom.js')}}"></script>