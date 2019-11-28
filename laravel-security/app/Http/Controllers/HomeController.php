<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
//    public function create(){
//        return view('page_admin');
//    }
//
//    public function store(Request $request){
//
//    }

    public function showPageGuest(){
        if (!$this->userCan('page_guest')){
            abort('403','You can go in here');
        }
        return view('layouts.page_guest');

    }

    public function showPageAdmin(){
        if (!$this->userCan('page_admin')){
            abort('403','You can go in here');
        }
        return view('layouts.page_admin');
    }

}
