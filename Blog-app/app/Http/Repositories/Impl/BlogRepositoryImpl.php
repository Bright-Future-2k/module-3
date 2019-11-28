<?php

namespace App\Http\Repositories\Impl;

use App\Blogger;
use App\Http\Repositories\Impl\BlogRepository;
use App\Http\Repositories\EloquentRepository;

class BlogRepositoryImpl extends EloquentRepository implements BlogRepository
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        $model = Blogger::class;
        return $model;
    }
}
