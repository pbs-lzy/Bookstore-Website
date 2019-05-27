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
    return redirect('/books');
});

Route::resource('books', 'BookController');

Route::get('/search','SearchController@search');

Route::get('/request', 'BookRequestController@create')->name('requests.create');
Route::post('/request', 'BookRequestController@store')->name('requests.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
