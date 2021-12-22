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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/jishee', 'HomeController@jishee')->name('jishee');

Route::get('/tuhai', 'HomeController@tuhai')->name('site.tuhai');

Route::get('/create', 'HolboltController@create')->name('holbolt.create');

Route::post('/holbolt', 'HolboltController@store')->name('holbolt.store');

Route::get('/holbolthiih', 'HolboltController@index')->name('holbolt.index');

Route::get('/zasah/{holbolt}/edit', 'HolboltController@edit')->name('holbolt.edit');

Route::post('/zasah/{holbolt}/update', 'HolboltController@update')->name('holbolt.update');

Route::get('/holbolt/{holbolt}/show', 'HolboltController@show')->name('holbolt.show');

Route::post('/holbolt/{holbolt}/destroy', 'HolboltController@destroy')->name('holbolt.destroy');

Route::get('/upload', 'ImageController@index')->name('image.index');

Route::post('/upload', 'ImageController@store')->name('image.store');
