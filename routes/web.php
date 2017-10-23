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

Route::get('/welcome',function(){
    return view('/welcome');
});


Route::get('/room/create','RoomController@create');
Route::post('/room/store','RoomController@store');
Route::get('/room/list','RoomController@list');
Route::delete('/room/delete/{id}','RoomController@delete');
Route::get('/room/edit/{id}','RoomController@loadUpdate');
Route::put('/room/put','RoomController@update');
Route::get('/rooms','RoomController@listRoom');





Route::get('/customer/book/{id}','LodgingDetailsController@book');
Route::post('/customer/save','LodgingDetailsController@save');
Route::delete('/customer/delete/{id}','LodgingDetailsController@delete');
Route::get('/customer/edit/{id}','LodgingDetailsController@loadUpdate');
Route::patch('/customer/put','LodgingDetailsController@update');
Route::get('/customer/list','LodgingDetailsController@list');
Route::get('/customer/room/{id}','LodgingDetailsController@getRoom');

Route::get('/thankyou',function(){
    return view('thank');
});

Route::get('/login','Auth\LoginController@showForm');
Route::post('/logout','Auth\LoginController@logout');
Route::post('/authenticate','Auth\LoginController@authenticate')->name('login');

Route::get('/register','Auth\RegisterController@showForm');
Route::post('/create','Auth\RegisterController@create')->name('register');


Route::get('/dashboard', 'HomeController@index')->name('dashboard');

