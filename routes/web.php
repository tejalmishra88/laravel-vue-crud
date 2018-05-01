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
//Route::resource('tasks', 'TodoController');
Route::resource('tasks', 'TodoController');
Route::get('tasks/search/{term?}', 'TodoController@index');

//Route::resource('aditinames', 'AditiController');
Route::get('aditinames/getnames', 'AditiController@getnames');
Route::post('savenames1', 'AditiController@savenames');
Route::get('xyz', 'SonuController@getnames');

