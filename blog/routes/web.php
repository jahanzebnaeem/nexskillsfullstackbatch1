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

Route::get('/myP', function () {
    return "Full Stack Batch 1";
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

Route::get('/hello', 'HelloController@hello');

Route::get('/main', 'TestController@index');

// Route::get('/about', 'HelloController@about');
Route::get('/services', 'HelloController@services');

Route::view('/about', 'about');
// Route::view('/services', 'services');

Route::get('/contact', function() {
    $val = "Hi! How are you?";
    return view('contact', [
        'greetings' => $val
    ]);
});
