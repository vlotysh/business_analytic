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

Route::get('login', ['as' => 'login', 'uses' => '\App\Http\Controllers\Auth\LoginController@getView']);

Route::get('register', ['as' => 'register', 'uses' => '\App\Http\Controllers\Auth\RegisterController@getView']);
Route::post('register', ['as' => 'register', 'uses' => '\App\Http\Controllers\Auth\RegisterController@createUser']);
