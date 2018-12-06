<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection='Book';
    protected $fillable=['name','author.name'];

    public function author()
    {
        //$books = author::first()->books;
        return $this->embedsOne('App\author');
    }
}
