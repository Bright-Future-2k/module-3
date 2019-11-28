<?php

namespace App\Http\Controllers;

use App\City;
use Foo\DataProviderIssue2922\SecondHelloWorldTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('cities.list',compact('cities'));
    }
    public function create(){
        return view('cities.create');
    }
    public function store(Request $request){
        $cities = new City();
        $cities->name = $request->input('name');
        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('images','public');
            $cities->image = $path;

            $request->file('image','doremon.png');
        }else{
            echo 'chua co file';
        }
        $cities->save();

        Session::flash('success','tao them nguoi thanh cong');
        return redirect()->route('cities.index');
    }

    public function edit($id){
        $cities = City::find($id);
        return view('cities.edit',compact('cities'));
    }

    public function update(Request $request,$id){
        $cities = City::find($id);
        $cities->name = $request->input('name');
        $cities->save();

        Session::flash('success','cap nhat thanh cong');
        return redirect()->route('cities.index');
    }

    public function destroy($id){
        $cities = City::find($id);
        $cities->delete();

        Session::flash('success','xoa thanh cong');
        return redirect()->route('cities.index');
}
}
