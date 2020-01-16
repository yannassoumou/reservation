<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Appartement extends Model{

    protected $fillable = [
        'id', 'libelle','superficie','reference','commentaire','statut','prix','reference_logement'
    ];

}
