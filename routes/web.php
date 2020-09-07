<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','ClientController@index');
Route::get('/client/details/{id}', 'ClientController@details');

Auth::routes(['verify' => true]);
route::group(['middleware'=> 'auth'], function(){
    route::get('/dashboard','AdminController@dashboard');
    route::get('/film','FilmController@index');
    route::get('/film/tambah','FilmController@tambah');
    route::post('/film/store','FilmController@store');
    route::get('/film/edit/{id}','FilmController@edit');
    route::get('/film/status/{id}','BookingController@status');
    route::get('/pesanan','PesananController@index');
    route::get('/pesanan/pdf','PesananController@tiket');
    route::put('/film/update/{id}','FilmController@update');
    Route::get('/film/hapus/{id}', 'FilmController@hapus');
    Route::get('/film/details/{id}', 'FilmController@details');
    Route::get('addToCart/{id}', 'ClientController@addToCart');
    Route::get('booking', 'BookingController@index');
});
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/action', 'KategoriController@action');
Route::get('/comedy', 'KategoriController@comedy');
Route::get('/romance', 'KategoriController@romance');
Route::get('/about', 'AboutController@index');
Route::get('/100', 'RetingController@reting');
Route::get('/90', 'RetingController@reting1');
Route::get('/80', 'RetingController@reting2');

Route::get('cart', 'ClientController@cart');
Route::get('/booking/{id}', 'BookingController@store');
Route::get('/order', 'CartController@order');



Route::post('/orderadd', 'CartController@orderadd');
Route::get('/client', 'ClientController@client');
