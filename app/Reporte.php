<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Reporte extends Eloquent
{

    protected $connection='mongodb';
    protected $collection='Reportes';
    protected $fillable=['cliente','auto','mant','costo'];

    public function mantenimiento()
    {
        return $this->hasMany('Mantenimiento');
    }
}
