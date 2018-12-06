<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cliente extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection='Cliente';

    protected $fillable=['idcl','nombre','apellidos','celular','dni','sexo'];
}

