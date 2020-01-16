@extends('layouts.master')

@section('content')


	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Toutes les Agences</h3>
			</div>

			<div class="box-body">
				<table class="table table-responsive">
					<thead>
					<tr>
						<th>id</th>
						<th>Compagnie</th>
						<th>Libelle de l'agence</th>
						<th>Numero de la gare</th>
					</tr>

					</thead>

					<tbody>

					@foreach($agences as $agc)
						<tr>
							<td>{{$agc->id}}</td>
							<td>{{$agc->compagnie}}</td>
							<td>{{$agc->lib_agence}}</td>
							<td>{{$agc->id_gare_agence}}</td>
							<td>
								<button class="btn btn-info" data-compagnie="{{$agc->compagnie}}" data-libagence="{{$agc->lib_agence}}" data-id_gare_agence="{{$agc->id_gare_agence}}" data-agcid={{$agc->id}} data-toggle="modal" data-target="#edit">Modifier</button>
								/w
								<button class="btn btn-danger" data-agcid={{$agc->id}} data-toggle="modal" data-target="#delete">Supprimer</button>
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
		Nouvelle Agence
	</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Nouvelle Agence</h4>
				</div>
				<form action="{{route('agence.store')}}" method="post">
					{{csrf_field()}}
					<div class="modal-body">
						@include('agence.form')
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer/button>
						<button type="submit" class="btn btn-primary">Sauvegarder les Changements</button>
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
					<h4 class="modal-title" id="myModalLabel">Modifier Agence</h4>
				</div>
				<form action="{{route('agence.update','test')}}" method="post">
					{{method_field('patch')}}
					{{csrf_field()}}
					<div class="modal-body">
						<input type="hidden" name="agc_id" id="agc_id" value="">
						@include('agence.form')
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer/button>
						<button type="submit" class="btn btn-primary">Sauvegarder les Changements</button>
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
				<form action="{{route('agence.destroy','test')}}" method="post">
					{{method_field('delete')}}
					{{csrf_field()}}
					<div class="modal-body">
						<p class="text-center">
							Vous Voulez vraiment supprimer
						</p>
						<input type="hidden" name="agc_id" id="agc_id" value="">

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