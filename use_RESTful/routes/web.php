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
Route::get('/index','WeatherController@example_about_guzzle');

Route::group(['prefix'=>'customers'],function (){
    Route::get('/', 'CustomerController@index')->name('customers.all');
    Route::get('/{customerId}', 'CustomerController@show')->name('customers.show');
    Route::post('/', 'CustomerController@store')->name('customers.store');
    Route::put('/{customerId}', 'CustomerController@update')->name('customers.update');
    Route::delete('/{customerId}', 'CustomerController@destroy')->name('customers.destroy');
});

