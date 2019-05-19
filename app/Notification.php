<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //Table Name
    protected $table = "notifications";
    //Primary Key
    public $primaryKey = "nid";
    //Timestamps
    public $timestamps = false;
}
