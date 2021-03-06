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

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;

Route::get('/', 'HomeController@index');

Route::get('/newPage', 'HelloController@index');

Route::get('/hello', 'HelloController@hello');

// Route::get('/about', 'HelloController@about');
Route::get('/service', 'ServiceController@index');
Route::post('/service', 'ServiceController@store');

Route::view('/about', 'about');
// Route::view('/services', 'services');

Route::get('/quiz', 'QuizController@index');
Route::get('/services', 'ServiceController@services');
Route::post('/services', 'ServiceController@addservices');


Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/{customer}', 'CustomerController@show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit');
Route::patch('/customers/{customer}', 'CustomerController@update');
Route::delete('/customers/{customer}', 'CustomerController@destroy');

Route::get('/countries', 'CountryController@index');
Route::get('/countries/create', 'CountryController@create');
Route::post('/countries', 'CountryController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
