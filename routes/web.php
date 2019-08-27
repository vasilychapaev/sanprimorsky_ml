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

//Route::do

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function() {
    dd('land current');
});

Route::get('/1', 'LandingController@sanprimorsky');
Route::post('/send', 'LandingController@send');

Route::post('/webpay/order', 'WebpayController@order');
Route::post('/webpay/return', 'WebpayController@return');
Route::get('/webpay/cancel', 'WebpayController@cancel');
Route::get('/webpay/notify', 'WebpayController@notify'); // ? get/post
Route::get('/webpay/check', 'WebpayController@check'); // надо? или в return > check
