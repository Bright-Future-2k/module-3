<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CreateCustomerRequest;
use Illuminate\Support\Facades\Session;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(CreateCustomerRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        if($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('images','public');
            $customer->image = $path;
        }else{
            echo 'chua co file';
        }

        $customer->save();

        Session::flash('success', 'tao thanh cong');
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $customers = Customer::findOrFail($id);
        return view('customers.edit',compact('customers'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        if($request->hasFile('image')){
            $image = $request->image;
            if($image){
                unlink(storage_path('app/public/'.$image));
            }
            $path = $image->store('images','public');
            $customer->image = $path;

            $request->file('image','doremon.png');
        }else{
            echo 'chua co file';
        }
        $customer->save();

        Session::flash('success', 'thay doi thanh cong');
        return redirect()->route('customers.index');

    }
    public function destroy($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();

        Session::flash('success','xoa thanh cong');
        return redirect()->route('customers.index');
    }
}
