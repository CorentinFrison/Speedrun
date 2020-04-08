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

Route::get('/','FirstController@index');
Route::get('/games','FirstController@gamelist');
Route::get('/games/{id}','FirstController@gameid')->where('id','[0-9]+');
Route::get('runs/','FirstController@runlist');
Route::get('runs/{id}','FirstController@run')->where('id','[0-9]+');