<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Table Name
    protected $table = "products";
    //Primary Key
    public $primaryKey = "pid";
    //Timestamps
    public $timestamps = false;
}
