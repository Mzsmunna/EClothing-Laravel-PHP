<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Purchase extends Model
{
    ///Table Name
    protected $table = "purchases";
    //Primary Key
    public $primaryKey = "prid";
    //Timestamps
    public $timestamps = false;

    public function getDatesAttribute($value)
    {
        $this->attributes['date'] = Carbon::createFromFormat('Y-m-d', $value);
    }
}
