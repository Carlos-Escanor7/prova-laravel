<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'tipo_certidao','envolvido1','envolvido2','data'
    ];

}
