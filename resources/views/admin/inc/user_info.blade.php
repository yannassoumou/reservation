<form class="form-horizontal">
    <div class="form-group">
        <label for="nom_pers" class="col-sm-2 control-label">Nom</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="nom_pers" placeholder="Nom" disabled value="{{ $data['info_personne'][0]->nom_pers }}">
        </div>
    </div>
    <div class="form-group">
        <label for="prenom_pers" class="col-sm-2 control-label">Prénom</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="prenom_pers" placeholder="Prénom" disabled value="{{ $data['info_personne'][0]->prenom_pers }}">
        </div>
    </div>
    <div class="form-group">
        <label for="nom_jeune_fille" class="col-sm-2 control-label">Nom de jeune fille</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="nom_jeune_fille" placeholder="Nom de jeune fille" disabled value="{{ $data['info_personne'][0]->nom_jeune_fille }}">
        </div>
    </div>
    <div class="form-group">
        <label for="sexe_pers" class="col-sm-2 control-label">Sexe</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="sexe_pers" placeholder="Sexe" disabled value="{{ $data['info_personne'][0]->sexe_pers }}">
        </div>
    </div>
    <div class="form-group">
        <label for="email_pers" class="col-sm-2 control-label">Email</label>

        <div class="col-sm-10">
            <input type="email" class="form-control" id="email_pers" placeholder="Email" disabled value="{{ $data['info_personne'][0]->email_pers }}">
        </div>
    </div>
    <div class="form-group">
        <label for="lieu_naissance" class="col-sm-2 control-label">Lieu de naissance</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" id="lieu_naissance" placeholder="Lieu de naissance" disabled value="{{ $data['info_personne'][0]->lib_ville }}">
        </div>
    </div>
    <div class="form-group">
        <label for="date_naissance" class="col-sm-2 control-label">Date de naissance</label>

        <div class="col-sm-10">
            <input type="date" class="form-control" id="date_naissance" placeholder="Date de naissance" disabled value="{{ $data['info_personne'][0]->date_nais }}">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-danger" disabled>Soumettre</button>
        </div>
    </div>
</form>