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

Route::group(['middleware'=>'locale'],function (){
    Route::group(['prefix' =>'blog'],function (){
        Route::get('/','Blog_Controller@index')->name('blog.index');
        Route::get('/create','Blog_Controller@create')->name('blog.create');
        Route::post('/create','Blog_Controller@store')->name('blog.store');
        Route::get('/edit/{id}','Blog_Controller@edit')->name('blog.edit');
        Route::post('/edit/{id}','Blog_Controller@update')->name('blog.update');
        Route::get('/destroy','Blog_Controller@destroy')->name('blog.destroy');
    });
    Route::post('/language','LangController@changeLanguage')->name('lang.vi');

});

