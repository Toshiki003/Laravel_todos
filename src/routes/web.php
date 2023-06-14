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
Route::get('todos', 'TodosController@index');
Route::get('todos/create', 'TodosController@create');
Route::post('todos', 'TodosController@store');
Route::get('todos/{id}', 'TodosController@show');
Route::get('todos/{id}/edit', 'TodosController@edit');
Route::put('todos/{id}', 'TodosController@update');
Route::delete('todos/{id}', 'TodosController@destroy');
