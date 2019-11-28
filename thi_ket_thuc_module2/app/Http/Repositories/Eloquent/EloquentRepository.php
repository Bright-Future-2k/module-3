<?php

namespace App\Http\Repositories\Eloquent;

use App\Http\Repositories\RepositoryInterface;
use App\Http\Repositories\StaffRepository;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->find($id);
    }
    public function findById($id)
    {
        $result = $this->model->find($id);
    }
    public function create($obj)
    {
        $obj->save();
    }
    public function update($obj)
    {
        $obj->save();
    }
    public function destroy($obj)
    {
        $obj->delete();
    }
}
