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
// home screen route
Route::get('/', 'ProductsController@index');

Auth::routes();
// Route::resource('products', 'ProductsController');
Route::get('products/create','ProductsController@create')->name('products.create');
Route::post('products/store','ProductsController@store')->name('products.store');

// all products routes
Route::get('/listings','ProductsController@index')->name('listings');

// users profile link
Route::get('/home', 'HomeController@index')->name('home');

// cart routes
Route::post('/cart/add','ShoppingController@add_to_cart')->name('cart.add');
Route::get('/cart','ShoppingController@cart')->name('cart');
Route::get('/cart/delete/{id}', 'ShoppingController@cart_delete')->name('cart.delete');
