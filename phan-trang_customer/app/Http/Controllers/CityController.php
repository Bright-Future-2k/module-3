<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('city.list',compact('cities'));
    }
    public function create(){
        return view('city.create');
    }
    public function store(Request $request){
        $cities = new City();
        $cities->name = $request->input('name');

        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('image','public');
            $cities->picture = $path;

            $request->file('image','doremon.png');
        }else{
            echo 'chua co file';
        }

        $cities->save();
        Session::flash('success','tao thanh cong');
        return redirect()->route('city.list');
    }
    public function edit($id){
        $cities = City::find($id);
        return view('city.edit',compact('cities'));
    }
    public function update(Request $request,$id){
        $cities = City::find($id);
        $cities->name = $request->input('name');

        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('image','public');
            $cities->picture = $path;

            $request->file('image','doremon.png');
        }else{
            echo 'chua co du lieu';
        }

        $cities->save();

        Session::flash('success','cap nhat thanh cong');
        return redirect()->route('city.list');
    }
    public function destroy($id){
        $cities = City::find($id);
        $cities->delete();

        Session::flash('success','xoa thanh cong');
        return view('city.list');
    }
}
