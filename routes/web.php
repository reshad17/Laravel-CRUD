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


Route::get('/year','YearController@index')->name('year.index');
Route::post('/year','YearController@store')->name('year.store');

Route::get('/name','NameController@index')->name('name.index');
Route::post('/name','NameController@store')->name('name.store');

Route::get('/user','UserController@index')->name('user.index');
Route::post('/user','UserController@store')->name('user.store');

Route::get('/new','NewController@index')->name('new.index');
Route::post('/new','NewController@store')->name('new.store');
Route::get('/all/new','NewController@show')->name('new.show');
Route::get('/all/new/{id}','NewController@edit')->name('user_edit');
Route::get('/all/delete/{id}','NewController@destroy')->name('user_delete');

Route::get('/vokkor','VokkorController@index')->name('vokkor.index');
Route::post('/save','VokkorController@save')->name('vokkor.save');
Route::get('/view','VokkorController@view')->name('vokkor.view');
Route::get('/vokkor/edit/{id}','VokkorController@edit')->name('vokkor.edit');
Route::get('/vokkor/delete/{id}','VokkorController@delete')->name('vokkor.delete');
Route::PUT('/vokkor/update/{id}','VokkorController@update')->name('vokkor.update');


