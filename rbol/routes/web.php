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
    return view('rpl');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/posts', 'FormController@simpan');
Route::get('/table', 'FormController@index');
Route::get('/edit/{id}', 'FormController@edit');
Route::get('/delete/{id}', 'FormController@destroy');
Route::post('/update', 'FormController@update');