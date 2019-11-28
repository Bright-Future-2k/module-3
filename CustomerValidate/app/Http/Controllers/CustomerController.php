<?php

namespace App\Http\Controllers;

use App\Http\Requests\FromRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(FromRequest $request){

        $name=$request->name;
        $age=$request->age;
        return view('customers.customer');

    }
}
