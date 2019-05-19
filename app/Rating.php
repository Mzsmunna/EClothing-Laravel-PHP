<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //Table Name
    protected $table = "ratings";
    //Primary Key
    public $primaryKey = "rid";
    //Timestamps
    public $timestamps = false;
}
