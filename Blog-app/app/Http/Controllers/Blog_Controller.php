<?php

namespace App\Http\Controllers;

use App\Blogger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Blog_Controller extends Controller
{
    public function index(){
        $blogs = Blogger::all();
        return view('blog.index',compact('blogs'));
    }
    public function create(){
        return view('blog.create');
    }
    public function store(Request $request){
        $blog = new Blogger();
        $blog->name = $request->input('name');
        $blog->actor = $request->input('actor');
        $blog->post = $request->input('post');
        $blog->save();

        Session::flash('success','tao thanh cong');
        return redirect()->route('blog.index');

    }
    public function edit($id){
        $blog = Blogger::findOrFail($id);
        return view('blog.edit',compact('blog'));
    }
    public function update(Request $request,$id){
        $blog = new Blogger();
        $blog->name = $request->input('name');
        $blog->actor = $request->input('actor');
        $blog->post = $request->input('post');
        $blog->save();

        Session::flash('success','cap nhat thanh cong');
        return redirect()->route('blog.index');
    }
    public function destroy($id){
        $blog = Blogger::findOrFail($id);
        $blog->delete();

        Session::flash('success','xoa thanh cong');
        return redirect()->route('blog.index');
    }
}
