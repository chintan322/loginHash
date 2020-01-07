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

Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/register', 'RegisterController@store')->name('register');
Route::get('/dashboard', 'RegisterController@show')->name('dashboard');


Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@validatation')->name('login')->middleware('hash');
Route::get('/dashboard', 'LoginController@show')->name('dashboard');
