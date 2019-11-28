<?php


namespace App\Http\Services;


use App\Http\Repositories\StaffRepository;

class StaffService implements StaffServicesInterface
{
    public $staffRepository;

    public function __construct(StaffRepository $staffRepository)
    {
        $this->staffRepository = $staffRepository;
    }

    public function getAll()
    {
        $this->staffRepository->getAll();
    }

    public function findById($id)
    {
        $this->staffRepository->findById($id);
    }

    public function create($request)
    {
        $this->staffRepository->create($request);
    }

    public function update($request, $id)
    {
        $this->staffRepository->update($request,$id);
    }

    public function delete($id)
    {
        $this->staffRepository->delete($id);
    }
}
