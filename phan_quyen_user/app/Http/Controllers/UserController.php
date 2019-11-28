<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function approval()
    {
        return view('approval');
    }

    public function index()
    {
        $users = User::whereNull('approved_at')->get();

        return view('users', compact('users'));
    }

    public function approve($user_id)
    {
        $user = User::find($user_id);
        $user->update(['approved_at' => now()]);
        Session::flash('message','User approved successfully');
        return redirect()->route('admin.user.index');
    }
}
