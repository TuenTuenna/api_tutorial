<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('todos', 'TodoController@index')->name('todos.index');
Route::get('todos/{todo}', 'TodoController@show')->name('todos.show');
Route::post('todos','TodoController@store')->name('todos.store');
Route::put('todos/{todo}', 'TodoController@update')->name('todos.update');
Route::delete('todos/{todo}', 'TodoController@destroy')->name('todos.destroy');
