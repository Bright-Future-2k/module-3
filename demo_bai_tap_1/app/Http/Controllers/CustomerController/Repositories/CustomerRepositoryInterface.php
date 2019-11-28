<?php


namespace App\Http\Controllers\CustomerController\Repositories;


interface CustomerRepositoryInterface
{
    public function getModel();
    public function all();
    public function create($data);
    public function find($id);
    public function update($id,$data);
    public function delete($id);
}
