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
    return view('layouts');
});

Route::get('/users', 'UserController@index');
Route::get('/viewadduser', 'UserController@viewadduser');
Route::post('adduser', 'UserController@adduser');
Route::delete('deleteuser/{id}', 'UserController@deleteuser');
Route::get('/viewupdateuser/{id}', 'UserController@viewupdateuser');
Route::post('updateuser/{id}', 'UserController@updateuser');

