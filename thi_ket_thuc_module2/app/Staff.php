<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    public function group()
    {
        return $this->belongsTo('App\Group','group_id');
    }
}
