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

Route::get('/','UserController@index');
Route::resource('tampilanuser','TampilanUserController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::group(['middleware'=>['auth']],function(){
	Route::resource('hotel','HotelsController');
	Route::resource('kamar','kamarController');
	Route::resource('tamu','tamuController');
	Route::resource('booking','bookingController');
	Route::resource('laporan','laporanController');    	
  	
});

