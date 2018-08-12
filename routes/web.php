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

Route::get('/', 'ProductsController@index');

Auth::routes();
// Route::resource('products', 'ProductsController');
Route::get('products/create','ProductsController@create')->name('products.create');
Route::post('products/store','ProductsController@store')->name('products.store');
Route::get('/listings','ProductsController@index')->name('listings');
Route::get('/home', 'HomeController@index')->name('home');

