<form class="form-horizontal">
    <div class="form-group">
        <label for="nom_societe" class="col-sm-2 control-label">Nom</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="nom_societe" placeholder="Nom de la société" disabled value="{{ $data['info_societe'][0]->nom_soct }}">
        </div>
    </div>

    <div class="form-group">
        <label for="date_crea_soct" class="col-sm-2 control-label">Date de création</label>

        <div class="col-sm-10">
            <input type="date" class="form-control" id="date_crea_soct" placeholder="Date de création" disabled value="{{ $data['info_societe'][0]->date_crea_soct }}">
        </div>
    </div>

    <div class="form-group">
        <label for="email_soct" class="col-sm-2 control-label">Email</label>

        <div class="col-sm-10">
            <input type="email" class="form-control" id="email_soct" placeholder="Email" disabled value="{{ $data['info_societe'][0]->email_soct }}">
        </div>
    </div>

    <div class="form-group">
        <label for="adresse_soct" class="col-sm-2 control-label">Adresse</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="adresse_soct" placeholder="Adresse" disabled value="{{ $data['info_societe'][0]->adresse_soct }}">
        </div>
    </div>

    <div class="form-group">
        <label for="num_reg_soct" class="col-sm-2 control-label">Numéro du registre de commerce</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="num_reg_soct" placeholder="Numéro du registre de commerce" disabled value="{{ $data['info_societe'][0]->num_reg_soct }}">
        </div>
    </div>

    <div class="form-group">
        <label for="num_dfe_soct" class="col-sm-2 control-label">Numéro de la DFE</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="num_dfe_soct" placeholder="Numéro de la DFE" disabled value="{{ $data['info_societe'][0]->num_dfe_soct }}">
        </div>
    </div>

    <div class="form-group">
        <label for="sta_jur_soct" class="col-sm-2 control-label">Statut juridique</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="sta_jur_soct" placeholder="Statut juridique" disabled value="{{ $data['info_societe'][0]->lib_sta_jur }}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-danger" disabled>Soumettre</button>
        </div>
    </div>
</form>