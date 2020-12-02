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

Route::get('get/name/{name}','ShowController@setParameter');
Route::get('get/element','WaterController@describe');
Route::get('coupling/{a}/{b}','ShowController@showService');