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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});


//POSTS ROUTE
Route::get('/cari', 'FormController@index');
Route::get('/show/{id}', 'FormController@show');
Route::get('/edit/{id}', 'FormController@edit');
Route::get('/delete/{id}', 'FormController@destroy');
Route::post('/posts', 'FormController@simpan');
Route::post('/update', 'FormController@update');
Route::get('/mycari', 'mypostController@index');
Route::get('/search/{id}', 'searchController@index');

//Routing Comment
Route::get('/show/comment/delcom/{id}', 'CommentsController@hapus');
Route::post('/show/comment/simpan', 'CommentsController@simpan');

//Route::get('/table', 'FormController@index');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/table', function () {
    return view('table');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/reg', function () {
    return view('register');
});
Route::get('/pop', function () {
    return view('post');
});

Route::middleware('auth')->group(function () {
    Route::get('/form', function () {
        return view('form');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
