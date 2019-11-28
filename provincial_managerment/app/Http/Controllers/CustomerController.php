<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function create(){
        $cities = City::all();
        return view('customers.create',compact('cities'));
    }

    public function store(Request $request){
        $cities = new City();
        $cities->name = $request->input('name');
        $cities->save();

        Session::flash('success','tao thanh cong');
        return redirect()->route('customer.index');
    }
    public function index(){
        $cities = City::all();
        return view('customers.list',compact('cities'));
    }


}
