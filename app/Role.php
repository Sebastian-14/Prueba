<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Auth\User as Authenticatable;

class Role extends Authenticatable
{
    public function users()
    {
    return $this
        ->belongsToMany('App\User')
        ->withTimestamps();
    }
}
