<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Customer;
use App\Http\Requests\BillException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BillController extends Controller
{
    public function index()
    {
//        $customers = Customer::all();
        $bills = Bill::paginate(3);
        return view('bill.list', compact('bills'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('bill.create', compact('customers'));
    }

    public function store(BillException $request)
    {
        $bill = new Bill();
        $bill->customer_id = $request->customer_id;
        $bill->name = $request->name;
        $bill->date = $request->date;
        $bill->save();

        Session::flash('success', 'tao thanh cong');
        return redirect()->route('bills.index');
    }

    public function edit($id)
    {
        $customers = Customer::all();
        $bill = Bill::find($id);
        return view('bill.edit', compact('bill', 'customers'));
    }

    public function update(BillException $request, $id)
    {
        $bill = Bill::find($id);
        $bill->customer_id = $request->customer_id;
        $bill->name = $request->name;
        $bill->date = $request->date;
        $bill->save();

        Session::flash('success', 'sua thanh cong');
        return redirect()->route('bills.index');
    }

    public function destroy($id)
    {
        $bill = Bill::find($id);
        $bill->delete();

        Session::flash('success', 'xoa thanh cong');
        return redirect()->route('bills.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        if (!$keyword) {
            return redirect()->route('bills.index');
        }
        $bills = Bill::where('name', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('bill.list',compact('bills'));
    }
}
