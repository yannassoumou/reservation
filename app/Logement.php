<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    //
    protected $fillable = [
        'reference', 'designation','id_quartier',
    ];
}
