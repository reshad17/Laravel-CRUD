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

// Route::resource('products','ProductController');
Route::get('/products','ProductController@index')->name('products.index');
Route::get('/products/create','ProductController@create')->name('products.create');
Route::DELETE('/products/{product}','ProductController@destroy')->name('products.destroy');
Route::get('/products/{product}','ProductController@show')->name('products.show');
Route::get('/products/{product}/edit','ProductController@edit')->name('products.edit');
Route::PUT('/products/{product}','ProductController@update')->name('products.update');
Route::post('/products','ProductController@store')->name('products.store');