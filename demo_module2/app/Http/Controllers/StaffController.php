<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestException;
use App\Room;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::paginate(3);
        return view('staff.list',compact('staffs'));
    }
    public function create()
    {
        $rooms = Room::all();
        return view('staff.create',compact('rooms'));
    }
    public function store(RequestException $request)
    {
        $staff = new Staff();
        $staff->room_id = $request->room_id;
        $staff->name = $request->name;
        $staff->age = $request->age;
        $staff->phone = $request->phone;
        $staff->gender = $request->gender;
        $staff->address = $request->address;
        $staff->save();

        Session::flash('success','tao thanh cong');
        return redirect()->route('staff.index');
    }
    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staff.edit',compact('staff'));
    }
    public function update(RequestException $request,$id)
    {
        $staff = Staff::find($id);
        $staff->room_id = $request->input('room_id');
        $staff->name = $request->name;
        $staff->age = $request->age;
        $staff->phone = $request->phone;
        $staff->gender = $request->gender;
        $staff->address = $request->address;
        $staff->save();

        Session::flash('success','sua thanh cong');
        return redirect()->route('staff.index');
    }
    public function delete($id)
    {
        $staff = Staff::find($id);
        $staff->delete();

        Session::flash('success','xoa thanh cong');
        return redirect()->route('staff.index');
    }
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        if (!$keyword){
            return redirect()->route('staff.index');
        }
        $staffs = Staff::where('name','LIKE','%'.$keyword.'%')->paginate(3);
        return view('staff.list',compact('staffs'));
    }
}
