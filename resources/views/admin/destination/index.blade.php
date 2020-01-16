@extends('layouts.master')

@section('content')


	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Toutes les Destinations</h3>
			</div>

			<div class="box-body">
				<table class="table table-responsive">
					<thead>
					<tr>
						<th>id</th>
						<th>Destination</th>

					</tr>

					</thead>

					<tbody>

					@foreach($destinations as $dest)
						<tr>
							<td>{{$dest->id}}</td>
							<td>{{$dest->lib_dest}}</td>

							<td>
								<button class="btn btn-info" data-libdest="{{$dest->lib_dest}}" data-destid={{$dest->id}} data-toggle="modal" data-target="#edit">Modifier</button>
								/
								<button class="btn btn-danger" data-destid={{$dest->id}} data-toggle="modal" data-target="#delete">Supprimer</button>
							</td>
						</tr>

					@endforeach
					</tbody>


				</table>
			</div>
		</div>
	</div>



	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
		Nouvelle Destination
	</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Nouvelle Destination</h4>
				</div>
				<form action="{{route('destination.store')}}" method="post">
					{{csrf_field()}}
					<div class="modal-body">
						@include('destination.form')
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						<button type="submit" class="btn btn-primary">Sauvegarder</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modifier Destination</h4>
				</div>
				<form action="{{route('destination.update','test')}}" method="post">
					{{method_field('patch')}}
					{{csrf_field()}}
					<div class="modal-body">
						<input type="hidden" name="dest_id" id="dest_id" value="">
						@include('destination.form')
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						<button type="submit" class="btn btn-primary">Sauvegarder Modification</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title text-center" id="myModalLabel">Confirmation de suppression</h4>
				</div>
				<form action="{{route('destination.destroy','test')}}" method="post">
					{{method_field('delete')}}
					{{csrf_field()}}
					<div class="modal-body">
						<p class="text-center">
							Vous Voulez vraiment supprimer
						</p>
						<input type="hidden" name="dest_id" id="dest_id" value="">

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" data-dismiss="modal">Non, Sortir</button>
						<button type="submit" class="btn btn-warning">Oui, Supprimer</button>
					</div>
				</form>
			</div>
		</div>
	</div>


@endsection