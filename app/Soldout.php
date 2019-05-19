<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soldout extends Model
{
    //Table Name
    protected $table = "soldouts";
    //Primary Key
    public $primaryKey = "soid";
    //Timestamps
    public $timestamps = false;
}
