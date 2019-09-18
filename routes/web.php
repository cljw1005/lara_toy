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
    return view('main');
});
Route::get('/Mukkit_list/', 'MukkitController@index');
Route::get('/Mukkit_list/Mukkit_list_create', 'MukkitController@create');
Route::post('/Mukkit_list/store', 'MukkitController@store');
