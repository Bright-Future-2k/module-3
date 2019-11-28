<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function addFeedBack(Request $request)
    {
        $input = $request->all();
        Mail::send('mailfb', array('name' => $input['name'], 'email' => $input['email'], 'content' => $input['comment']), function ($message) {
            $message->to('plachym.it@gmail.com','Visitor')->subject('Visitor FeedBack!');
        });
        Session::flash('flash_message','send message successfully!');
        return view('form');
    }
}
