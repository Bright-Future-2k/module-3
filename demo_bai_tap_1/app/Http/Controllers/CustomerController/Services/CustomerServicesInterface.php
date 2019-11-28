<?php


namespace App\Http\Controllers\Customer\Servies;


interface CustomerServicesInterface
{
    public function all();
    public function create($data);
    public function find($id);
    public function update($id,$data);
    public function delete($id);
}
