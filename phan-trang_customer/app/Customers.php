<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public $timestamps =false;
    public function city(){
        return $this->belongsTo('App\City');
    }
}
