<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Quartier extends Model{

    protected $fillable = [
        'id', 'nom', 'id_dep',
    ];

}
