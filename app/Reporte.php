<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Reporte extends Eloquent
{

    protected $connection='mongodb';
    protected $collection='Reportes';
    protected $fillable=['idR','fecha','idm'];

    public function mantenimiento()
    {
        return $this->hasMany('Mantenimiento');
    }
}
