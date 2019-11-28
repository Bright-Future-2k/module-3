<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogger extends Model
{
    protected $table = 'posts';
    public $timestamps = false;
}
