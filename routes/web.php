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

Route::get('/', 'TodosController@index');

Route::get('about', function () {
    return view('about');
});

Route::get('todos', 'TodosController@index');
Route::get('todos/{todo}', 'TodosController@show');
Route::get('create', 'TodosController@create');
Route::post('store-todos', 'TodosController@store');

Route::get('todos/{todo}/edit', 'TodosController@edit');
Route::post('todos/{todo}/update-todos', 'TodosController@update');

Route::get('todos/{todo}/delete', 'TodosController@destroy');