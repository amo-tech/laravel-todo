<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/todos', 'App\Http\Controllers\TodosController@index')->name('todos.list');
Route::post('/todos/new', 'App\Http\Controllers\TodosController@create')->name('todos.table');
Route::get('/todos/new', 'App\Http\Controllers\TodosController@create')->name('todos.new');
Route::post('/todos', 'App\Http\Controllers\TodosController@storeNew')->name('todos.store');
Route::get('/todos/edit/{id}', 'App\Http\Controllers\TodosController@edit')->name('todos.edit');
Route::post('/todos/update/{id}', 'App\Http\Controllers\TodosController@update')->name('todos.update');
Route::post('/todos/comment/{id}', 'App\Http\Controllers\TodosController@storeComment')->name('todos.comment');
Route::get('/todos/{id}', 'App\Http\Controllers\TodosController@show')->name('todos.detail');
Route::post('/todos/status/{id}', 'App\Http\Controllers\TodosController@status')->name('todos.status');
Route::post('/todos/status/change/{id}', 'App\Http\Controllers\TodosController@stateChange')->name('todos.statechange');
Route::get('todos/status', 'App\Http\Controllers\TodosController@status')->name('todos.status2');

Route::post('/todos/{id}', 'App\Http\Controllers\TodosController@destroy')->name('todos.destroy');
Route::get('/', function () {
    return redirect('/todos');
});
