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
Route::group(['middleware' => 'locale'], function () {
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', 'CustomerController@index')->name('customers.index');
        Route::get('/create', 'CustomerController@create')->name('customers.create');
        Route::post('/store', 'CustomerController@store')->name('customers.store');
        Route::get('/edit/{id}', 'CustomerController@edit')->name('customers.edit');
        Route::post('/update/{id}', 'CustomerController@update')->name('customers.update');
        Route::get('/delete/{id}', 'CustomerController@destroy')->name('customers.destroy');
    });
    Route::group(['prefix' => 'bills'], function () {
        Route::get('/', 'BillController@index')->name('bills.index');
        Route::get('/create', 'BillController@create')->name('bills.create');
        Route::post('/store', 'BillController@store')->name('bills.store');
        Route::get('/edit/{id}', 'BillController@edit')->name('bills.edit');
        Route::post('/update/{id}', 'BillController@update')->name('bills.update');
        Route::get('/delete/{id}', 'BillController@destroy')->name('bills.destroy');
        Route::get('/search', 'BillController@search')->name('bills.search');

    });

    Route::group(['prefix'=>'cart'],function(){
        Route::get('/','CartController@index')->name('cart.index');
        Route::get('create-to-cart','CartController@addToCart')->name('cart.addToCart');
        Route::get('remove-to-cart','CartController@removeToCart')->name('cart.removeToCart');
        Route::post('update-to-cart','CartController@updateToCart')->name('cart.updateToCart');
    });

    Route::post('/locale','LangController@changeLanguage')->name('locale.change');
});
