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
    return redirect()->route('client.index');
});

Auth::routes();
Auth::routes(['verify'=>true]);


Route::get('/client', 'ClientController@index')->name('home')->middleware('verified');
Route::resource('/client', 'ClientController')->middleware('verified');
Route::resource('/cities', 'CityController')->middleware('verified');
