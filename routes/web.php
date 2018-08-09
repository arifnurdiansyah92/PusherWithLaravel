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

/*
Route diberi nama guna memudahkan pemanggilan link
*/
Route::get('/','Controller@index')->name("main");
Route::get('/data','Controller@data')->name("data");
Route::get('/admin/jeniskereta','JenisKeretaController@index')->name("jenis_kereta");
Route::get('/pusher', function() {
    event(new App\Events\CobaPusherEvent('Hi there Pusher!'));
    return "Event has been sent!";
});
