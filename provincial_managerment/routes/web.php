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


Route::group(['prefix'=>'cities'],function (){
   Route::get('/','CityController@index')->name('cities.index');
   Route::get('/create','CityController@create')->name('cities.create');
   Route::post('/create','CityController@store')->name('cities.store');
   Route::get('/edit/{id}','CityController@edit')->name('cities.edit');
   Route::post('/edit/{id}','CityController@update')->name('cities.update');
   Route::get('/delete/{id}','CityController@destroy')->name('cities.destroy');
   Route::get('/home', 'HomeController@index')->name('home');

});


