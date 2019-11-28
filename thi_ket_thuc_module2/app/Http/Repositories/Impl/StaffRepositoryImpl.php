<?php


namespace App\Http\Repositories\Impl;


use App\Http\Repositories\Eloquent\EloquentRepository;
use App\Staff;

class StaffRepositoryImpl extends EloquentRepository
{

    public function getModel()
    {
        $model = Staff::class;
        return $model;
    }
}
