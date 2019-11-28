<?php


namespace App\Http\Controllers;

use App\Customer;
use DemeterChain\C;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//Inject
//class CustomerController extends Controller
//{
//    protected $customerService;
//
//    public function __construct(CustomerServicesInterface $customerServices)
//    {
//        $this->customerService = $customerServices;
//    }
//
//    public function index(){
//        $customer = $this->customerService->all();
//        return view('customer.list',['customer'=>$customer]);
//    }
//    public function create(){
//        return view('customer.create');
//    }
//    public function store(Request $request){
//        $this->customerService->create($request->all());
//        return view('customer.list');
//    }
//    public function edit($id){
//        $customer = $this->customerService->find($id);
//        return view('customer.edit',['customer'=>$customer]);
//    }
//    public function update(Request $request,$id){
//        $this->customerService->update($id,$request);
//        return view('customer.list');
//    }
//
//    public function destroy($id){
//        $this->customerService->delete($id);
//        return view('customer.list');
//    }
//}

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.list',compact('customers'));
    }
    public function create()
    {
        return view('customer.create');
    }
    public function store(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->save();

        Session::flash('success','tao thanh cong');
        return redirect()->route('customers.index');
    }
    public function edit(Request $request,$id)
    {
        $customer = Customer::find($id);
        return view('customer.edit',compact('customer'));
    }
    public function update(Request $request,$id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->save();

        Session::flash('success','sua thanh cong');
        return redirect()->route('customers.index');
    }
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        Session::flash('success','xoa thanh cong');
        return redirect()->route('customers.index');
    }
}
