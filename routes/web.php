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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hal',function(){
	return view('tugas');
});

Route::get('hal1',function(){
	return view('tugas2');
});

Route::get('hal2',function(){
	return view('tugas3');
});

Route::get('hal3',function(){
	return view('tugas4');
});

Route::get('hal4',function(){
	return view('tugas5');
});