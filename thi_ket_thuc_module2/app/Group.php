<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    protected function staffs()
    {
        return $this->hasMany('App\Staff');
    }
}
