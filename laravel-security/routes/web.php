<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('send_mail',function (){
    return view('form');
});
//Route::post('/message/send',['uses'=>'FrontController@addFeedback','as'=>'front.fb']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/page_guest','HomeController@showPageGuest')->name('page_guest');
Route::get('/page_admin','HomeController@showPageAdmin')->name('page_admin');


