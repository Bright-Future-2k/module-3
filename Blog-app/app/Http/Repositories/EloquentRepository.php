<?php
namespace App\Http\Repositories;

abstract class EloquentRepository implements Repository
{
    protected $model;

    public function __construct()
    {
        $this->setModel;
    }

    abstract public function getModel();

    public function setModel(){
        $this->model = app()->make($this->getModel());
    }
    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->model->find($id);
        return $result;
    }
    public function create($data)
    {
        try{
            $result = $this->model->create($data);
        }catch (\Exception $exception){
            return null;
        }
        return $result;
    }
    public function update($data, $obj)
    {
        $obj->update($data);
        return $obj;
    }
    public function destroy($obj)
    {
        return $obj->delete();
    }

}
