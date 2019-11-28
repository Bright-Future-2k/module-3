<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\RequestException;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::paginate(3);
        return view('staff.list', compact('staffs'));
    }

    public function create()
    {
        $groups = Group::all();
        return view('staff.create', compact('groups'));
    }

    public function store(RequestException $request)
    {
        $staff = new Staff();
        $staff->group_id = $request->group_id;
        $staff->name = $request->input('name');
        $staff->date_birthday = $request->input('date_birthday');
        $staff->gender = $request->gender;
        $staff->number_phone = $request->number_phone;
        $staff->so_CMND = $request->so_CMND;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->save();

        Session::flash('success', 'tao thanh cong');
        return redirect()->route('staff.index');
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        $groups = Group::all();
        return view('staff.edit', compact('staff', 'groups'));
    }

    public function update(RequestException $request, $id)
    {
        $staff = Staff::find($id);
        $staff->group_id = $request->input('group_id');
        $staff->name = $request->name;
        $staff->date_birthday = $request->date_birthday;
        $staff->gender = $request->gender;
        $staff->number_phone = $request->number_phone;
        $staff->so_CMND = $request->so_CMND;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->save();

        Session::flash('success', 'cap nhat thanh cong');
        return redirect()->route('staff.index');
    }

    public function delete($id)
    {
        $staff = Staff::find($id);
        $staff->delete();

        Session::flash('success', 'xoa thanh thanh cong');
        return redirect()->route('staff.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        if (!$keyword) {
            Session::flash('no_word','can dien vao tim kiem');
            return redirect()->route('staff.index');
        }
        $staffs = Staff::where('name', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('staff.list', compact('staffs'));
    }
}
