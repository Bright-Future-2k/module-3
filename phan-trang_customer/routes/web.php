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
Route::group(['prefix'=>'customers'],function (){
    Route::get('/','CustomerController@index')->name('customers.index');
    Route::get('/create','CustomerController@create')->name('customers.create');
    Route::post('/create','CustomerController@store')->name('customers.store');
    Route::get('/edit/{id}','CustomerController@edit')->name('customers.edit');
    Route::post('/{id}/edit','CustomerController@update')->name('customers.update');
    Route::get('/delete/{id}','CustomerController@destroy')->name('customers.destroy');
    Route::get('/search','CustomerController@search')->name('customers.search');

});
Route::group(['prefix'=>'city'],function(){
   Route::get('/','CityController@index')->name('city.index');
   Route::get('/create','CityController@create')->name('city.create');
   Route::post('/create','CityController@store')->name('city.store');
   Route::get('/edit/{id}','CityController@edit')->name('city.edit');
   Route::post('/edit/{id}','CityController@update')->name('city.update');
   Route::get('/delete/{id}','CityController@destroy')->name('city.destroy');
});
