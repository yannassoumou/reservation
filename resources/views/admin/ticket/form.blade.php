	        	<div class="form-group">
		        	<label for="numero">Numero</label>
		        	<input type="text" class="form-control" name="numero" id="numero">
	        	</div>
				<div class="form-group">
		        	<label for="prix">Prix</label>
		        	<input type="text" class="form-control" name="prix" id="prix">
	        	</div>

	        	<div class="form-group">
	        		<label for="id_destination_ticket">Destination</label>
				<select name="id_destination_ticket" id="id_destination_ticket" class="form-control">
					@foreach($destinations as $dest)
					<option value="{{$dest->id}}">{{$dest->lib_dest}}</option>
						@endforeach
				</select>
				</div>
	        	<div class="form-group">
	        		<label for="id_agence_ticket">Compagnie</label>
				<select name="id_agence_ticket" id="id_agence_ticket" class="form-control">
					@foreach($agences as $agc)
					<option value="{{$agc->id}}">{{$agc->lib_agence}}</option>
						@endforeach
				</select>
				</div>
	        	<div class="form-group">
	        		<label for="id_categorie_ticket">Categorie</label>
				<select name="id_categorie_ticket" id="id_categorie_ticket" class="form-control">
					@foreach($categories as $cat)
					<option value="{{$cat->id}}">{{$cat->title}}</option>
						@endforeach
				</select>
				</div>