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

Auth::routes();

Route::get('login', ['as' => 'login', 'uses' => '\App\Http\Controllers\Auth\AuthController@getView']);
Route::get('logout', ['as' => 'logout', 'uses' => '\App\Http\Controllers\Auth\AuthController@logout']);
Route::post('login', ['as' => 'login', 'uses' => '\App\Http\Controllers\Auth\AuthController@login']);


Route::get('register', ['as' => 'register', 'uses' => '\App\Http\Controllers\Auth\RegisterController@getView']);
Route::post('register', ['as' => 'register', 'uses' => '\App\Http\Controllers\Auth\RegisterController@createUser']);



Route::get('/home', 'HomeController@index')->name('home');
