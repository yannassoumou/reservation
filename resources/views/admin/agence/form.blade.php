	        	<div class="form-group">
		        	<label for="compagnie">Compagnie</label>
		        	<input type="text" class="form-control" name="compagnie" id="compagnie">
	        	</div>
				<div class="form-group">
		        	<label for="lib_agence">Libelle de l'agence</label>
		        	<input type="text" class="form-control" name="lib_agence" id="lib_agence">
	        	</div>
	        	<div class="form-group">
	        		<label for="id_gare_agence">Gare</label>
				<select name="id_gare_agence" id="id_gare_agence" class="form-control">
					@foreach($gares as $gare)
					<option value="{{$gare->id}}">{{$gare->zone}}</option>
						@endforeach
				</select>
				</div>