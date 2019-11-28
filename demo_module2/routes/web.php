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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('staff')->group(function (){
    Route::get('/','StaffController@index')->name('staff.index');
    Route::get('/create','StaffController@create')->name('staff.create');
    Route::post('/store','StaffController@store')->name('staff.store');
    Route::get('/edit/{id}','StaffController@edit')->name('staff.edit');
    Route::post('/update/{id}','StaffController@update')->name('staff.update');
    Route::get('/delete/{id}','StaffController@delete')->name('staff.delete');
    Route::post('/search','StaffController@search')->name('staff.search');
});
