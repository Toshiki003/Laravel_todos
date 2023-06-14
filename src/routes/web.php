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
// 下の書き方は、Laravel5.2以前の書き方。functionは、Laravel5.3以降は使えない。
Route::get('/', function () {
    return view('welcome');
});
// 以下、追加。Laravel5.3以降の書き方。
Route::get('todos', 'TodoController@index');
Route::get('todos/create', 'TodoController@create');
Route::post('todos', 'TodoController@store');
Route::get('todos/{id}', 'TodoController@show');
Route::get('todos/{id}/edit', 'TodoController@edit');
Route::put('todos/{id}', 'TodoController@update');
Route::delete('todos/{id}', 'TodoController@destroy');
