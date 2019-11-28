<?php
namespace App\Http\Repositories;

use App\Staff;

class StaffRepository implements StaffRepositoryInterface
{
    public $staff ;
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function getAll()
    {
        $this->staff->all();
    }

    public function findById($id)
    {
        $this->staff->find($id);
    }

    public function create($data)
    {
        $this->staff->create($data);
    }

    public function update($data, $obj)
    {
        // TODO: Implement update() method.
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }
}
