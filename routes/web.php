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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::resource('good','GoodController');

Route::get('/test',function(){
	return view('test');
});

Route::group([
    'middleware'=>['auth'],
],function(){
    Route::resource('good','GoodController');
});


Route::get('order','OrderController@index');
Route::get('order/create','OrderController@create');
Route::post('order','OrderController@store')->middleware('checkName')->name('order.store');



