<?php


namespace App\Http\Controllers\CustomerController\Repositories\customer;


use App\Http\Controllers\CustomerController\Repositories\EloquentRepository;

class CustomerRepository extends EloquentRepository implements CustomerInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }
}
