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

use App\Http\Controllers\TodosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createtodos', 'TodosController@index');
Route::get('/savetodos',   'TodosController@create');
Route::get('/alltodos', 'TodosController@show');
Route::get('/destroytodo/{id}', 'TodosController@destroy');
Route::get('/edittodo/{id}', 'TodosController@edit');
Route::get('/update/{id}', 'TodosController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
