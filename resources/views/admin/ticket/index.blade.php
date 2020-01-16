@extends('layouts.master')

@section('content')


	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Tous les Tickets</h3>
			</div>

			<div class="box-body">
				<table class="table table-responsive">
					<thead>
					<tr>
						<th>id</th>
						<th>Numero</th>
						<th>prix</th>
						<th>id de la destination du ticket</th>
						<th>id de la categorie du ticket</th>
						<th>id de l'agence du ticket</th>
					</tr>

					</thead>

					<tbody>

					@foreach($tickets as $tck)
						<tr>
							<td>{{$tck->id}}</td>
							<td>{{$tck->numero}}</td>
							<td>{{$tck->prix}}</td>
							<td>{{$tck->id_destination_ticket}}</td>
							<td>{{$tck->id_categorie_ticket}}</td>
							<td>{{$tck->id_agence_ticket}}</td>
							<td>
								<button class="btn btn-info" data-numero="{{$tck->numero}}" data-prix="{{$tck->prix}}" data-idagenceticket="{{$tck->id_agence_ticket}}" data-idcategorieticket="{{$tck->id_categorie_ticket}}" data-iddestinationticket="{{$tck->id_destination_ticket}}" data-tckid={{$tck->id}} data-toggle="modal" data-target="#edit">Modifier</button>
								/
								<button class="btn btn-danger" data-tckid={{$tck->id}} data-toggle="modal" data-target="#delete">Supprimer</button>
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
		Nouveaux Ticket
	</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Nouveaux Ticket</h4>
				</div>
				<form action="{{route('ticket.store')}}" method="post">
					{{csrf_field()}}
					<div class="modal-body">
						@include('ticket.form')
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
					<h4 class="modal-title" id="myModalLabel">Modifier Ticket</h4>
				</div>
				<form action="{{route('ticket.update','test')}}" method="post">
					{{method_field('patch')}}
					{{csrf_field()}}
					<div class="modal-body">
						<input type="hidden" name="tck_id" id="tck_id" value="">
						@include('ticket.form')
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
	<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title text-center" id="myModalLabel">Confirmation de suppression</h4>
				</div>
				<form action="{{route('ticket.destroy','test')}}" method="post">
					{{method_field('delete')}}
					{{csrf_field()}}
					<div class="modal-body">
						<p class="text-center">
							Vous Voulez vraiment supprimer
						</p>
						<input type="hidden" name="tck_id" id="tck_id" value="">

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