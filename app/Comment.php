<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //Table Name
    protected $table = "comments";
    //Primary Key
    public $primaryKey = "cmntid";
    //Timestamps
    public $timestamps = false;
}
