<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class mantenimiento extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection='Mantenimientos';
    //protected $primaryKey ='id';
    protected $fillable=['nombre','descripcion','costo'];

    public function reporte()
    {
        return $this->belongsTo('Reporte');
    }
    
}
