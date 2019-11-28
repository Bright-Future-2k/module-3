<?php

namespace App\Http\Controllers;

use App\City;
use App\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customers::paginate(5);
        $cities = City::all();
        return view('customers.list',compact('customers', 'cities'));
    }

    public function create()
    {
        return view('customers.create');

    }

    public function store(Request $request)
    {
        $customers = new Customers();
        $customers->name = $request->input('name');
        $customers->phone = $request->input('phone');

        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('image', 'public');
            $customers->picture = $path;

            $request->file('image', 'car.png');
        } else {
            echo 'chua co file';
        }

        $customers->save();

        Session::flash('success', 'tao thanh cong');
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $customer = Customers::find($id);
        return view('customers.edit',compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customers = Customers::find($id);
        $customers->name = $request->input('name');
        $customers->phone = $request->input('phone');
        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('image','public');
            $customers->picture = $path;

            $request->file('image','doremon.png');
        }else{
            echo 'chua co file';
        }
        $customers->save();

        Session::flash('success', 'cap nhat thanh cong');
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        $customers = Customers::find($id);
        $customers->delete();

        Session::flash('success', 'xoa thanh cong');
        return redirect()->route('customers.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        if (!$keyword) {
            return redirect()->route('customers.index');
        }
        $customers = Customers::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        $cities = City::all();
        return view('customers.list', compact('customers', 'cities'));


    }
}
