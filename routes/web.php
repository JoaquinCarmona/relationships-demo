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

Route::get('/countries','HomeController@index');
Route::get('/addresses','HomeController@getAddresses');
Route::get('/customers','HomeController@getCustomers');
Route::get('/payments','HomeController@getPayments');
