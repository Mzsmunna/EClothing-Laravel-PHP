<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    //Table Name
    protected $table = "favorites";
    //Primary Key
    public $primaryKey = "fid";
    //Timestamps
    public $timestamps = false;
}
