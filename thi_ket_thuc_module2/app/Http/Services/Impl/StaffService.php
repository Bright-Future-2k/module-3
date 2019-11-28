<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\StaffRepository;
use App\Http\Services\ServiceInterface;
use App\Staff;

class StaffService implements ServiceInterface
{
    protected $staffRepository;
    public function __construct(StaffRepository $staffRepository)
    {
        $this->staffRepository = $staffRepository;
    }

    public function getAll()
    {
        return $this->staffRepository->getAll();

    }

    public function findById($id)
    {
        return $this->staffRepository->findById($id);
    }

    public function create($request)
    {
        $staff = new Staff();
        $staff->group_id = $request->group_id;
        $staff->name = $request->name;
        $staff->date_birthday = $request->date_birthday;
        $staff->gender = $request->gender;
        $staff->number_phone = $request->number_phone;
        $staff->so_CMND = $request->so_CMND;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $this->staffRepository->create($staff);
    }

    public function update($request, $id)
    {
        $staff = $this->staffRepository->findById($id);
        $staff->group_id = $request->group_id;
        $staff->name = $request->name;
        $staff->date_birthday = $request->date_birthday;
        $staff->gender = $request->gender;
        $staff->number_phone = $request->number_phone;
        $staff->so_CMND = $request->so_CMND;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $this->staffRepository->update($staff);
    }

    public function destroy($id)
    {
        $staff = $this->staffRepository->findById($id);
        $this->staffRepository->destroy($staff);
    }
}
