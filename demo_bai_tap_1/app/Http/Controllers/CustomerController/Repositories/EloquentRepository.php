<?php


namespace App\Http\Controllers\CustomerController\Repositories;


abstract class EloquentRepository implements CustomerRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    /**
     * @param mixed $model
     */
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public abstract function getModel();

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        $this->model->find($id);
    }

    public function create($data)
    {
        try {
            $obj = $this->model->create($data);
        } catch (\Exception $exception) {
            return null;
        }
        return $obj;
    }

    public function update($id, $data)
    {
        $this->model->update($id, $data);
    }

    public function delete($id)
    {
        $this->model->delete($id);
    }

}
