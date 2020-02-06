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
    return view('Welcome');
});

Route::get('/newPage', 'HelloController@index');

Route::get('/hello', 'HelloController@hello');

// Route::get('/about', 'HelloController@about');
Route::get('/services', 'HelloController@services');

Route::view('/about', 'about');
// Route::view('/services', 'services');
