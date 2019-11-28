<?php


namespace App\Http\Controllers\CustomerController\Services;


use App\Customer;
use App\Http\Controllers\Customer\Servies\CustomerServicesInterface;
use App\Http\Controllers\CustomerController\Repositories\CustomerRepositoryInterface;

class CustomerServices implements CustomerServicesInterface
{
    private $CustomerServices;
    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->CustomerServices = $customerRepository;
    }

    public function all()
    {
        $customer = $this->CustomerServices->all();
    }
    public function create($data)
    {
        $customer = new Customer();
        $customer->name = $data->name;
        $customer->phone = $data->phone;
        $this->CustomerServices->create($data);
    }

    public function find($id)
    {
        $this->CustomerServices->find($id);
    }

    public function update($id, $data)
    {
        $customer = new Customer();
        $customer->name = $data->name;
        $customer->phone = $data->phone;
        $this->CustomerServices->update($id,$data);
    }
    public function delete($id)
    {
        $this->CustomerServices->delete($id);
    }
}
