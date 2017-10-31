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

Route::get('/', "HomeController@index")->name('home-page');
Route::get('/booking/confirmation', 'BookingController@confirmation')->name('confirmation');
Route::post('/booking/payment', 'BookingController@payment')->name('payment');

Route::Resource('house', 'HouseController');

