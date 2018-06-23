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

Route::get('/thread', 'ThreadController@index');
Route::get('/thread/create', 'ThreadController@create');
Route::post('/thread', 'ThreadController@store');
Route::get('/thread/{id}', 'ThreadController@show');

Route::post('/post', 'PostController@store');

Route::get('/home', 'HomeController@index')->name('home');
