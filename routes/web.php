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


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::post('/test', function () {
    return view('test')->with('vv',"manik");
});

Route::get('/home','HomeController@Index');

Route::get('addtransport', 'TransportController@index')->middleware('auth');
Route::get('addtrans', function () {
    return view('admin.transport.add_trans');
})->middleware('auth');
Route::post('add_trans','TransportController@store'); 





