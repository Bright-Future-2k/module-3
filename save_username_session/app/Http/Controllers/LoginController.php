<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin(){

        return view('login');
    }
    public function login(Request $request)
    {
        $username = $request->inputUsername;
        $password = $request->inputPassword;

        if ($username == 'admin' && $password == '123456') {
            $request->session()->push('login', true);
            return redirect()->route('show.blog');
        }
            $message = 'Dang nhap khong thanh cong. Ten nguoi dung hoac mat khau khong dung';
            $request->session()->flash('login-fail', $message);
            return view('login');
    }
}
