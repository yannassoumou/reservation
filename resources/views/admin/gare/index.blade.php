@extends('layouts.master')

@section('content')


	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Toutes les Gares</h3>
			</div>

			<div class="box-body">
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>id</th>
							<th>Zone</th>
							<th>Ville</th>
							<th>CRUD</th>
							<th>Date creation</th>
							<th>Date mise a jour</th>
						</tr>
						
					</thead>

					<tbody>

						@foreach($gares as $gare)
							<tr>
								<td>{{$gare->id}}</td>
								<td>{{$gare->zone}}</td>
								<td>{{$gare->ville}}</td>
								<td>
									<button class="btn btn-info" data-zone="{{$gare->zone}}" data-ville="{{$gare->ville}}" data-gareid={{$gare->id}} data-toggle="modal" data-target="#edit">Modifier</button>
									/
									<button class="btn btn-danger" data-gareid={{$gare->id}} data-toggle="modal" data-target="#delete">Supprimer</button>
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
 	Nouvelle Gare
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nouvelle gare</h4>
      </div>
      <form action="{{route('gare.store')}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('gare.form')
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
        <h4 class="modal-title" id="myModalLabel">Modifier Gares</h4>
      </div>
      <form action="{{route('gare.update','test')}}" method="post">
      		{{method_field('patch')}}
      		{{csrf_field()}}
	      <div class="modal-body">
	      		<input type="hidden" name="gare_id" id="gare_id" value="">
				@include('gare.form')
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
      <form action="{{route('gare.destroy','test')}}" method="post">
      		{{method_field('delete')}}
      		{{csrf_field()}}
	      <div class="modal-body">
				<p class="text-center">
					Vous Voulez vraiment supprimer
				</p>
	      		<input type="hidden" name="gare_id" id="gare_id" value="">

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