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
    return view('/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/upload','uploadController@index');

Route::post('/store','uploadController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editprofile','editprofileController@index');

Route::post('/editstore','editprofileController@store');


Route::get('/about', 'AboutController@index');
