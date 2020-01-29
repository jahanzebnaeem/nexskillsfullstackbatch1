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

Route::get('/myP', function () {
    return "Hello world";
});

Route::get('/myPa', function () {
    return view('test');
});

Route::get('/myPage', function () {
    $myVariable = 'Welcome bore tu nai ho rahe!';
    return view('test', [
        'myVariable' => $myVariable
    ]);
});

Route::get('/myTest', function () {
    $myVariable = 'Welcome bore tu nai ho rahe!';
    return view('subviews.myTest', compact('myVariable'));
});

Route::get('/myNewTest', 'TestController@index');

// Passing data to view
Route::get('/myNPage', function () {
    $coolString = 'Hello All';
    return view('subviews.myNewPage', compact('coolString'));
});

Route::get('/myNewPage', 'HelloController@index');
