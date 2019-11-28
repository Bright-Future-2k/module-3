<?php


namespace App\Http\Repositories;


interface StaffRepositoryInterface
{
    public function getAll();
    public function findById($id);
    public function create($data);
    public function update($data,$obj);
    public function delete($obj);
}
