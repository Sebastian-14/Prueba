<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Auto extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection='Auto';

    protected $fillable=['idcl','idau','placa','marca','color','modelo','año'];
}

