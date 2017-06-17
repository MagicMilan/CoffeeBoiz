<?php

Route::get('/', 'IndexController@index');

Auth::routes();


/*
 * Producten
 */


Route::get('products', 'ProductsController@index');
Route::post('products', 'ProductsController@store')->middleware('admin');
Route::get('products/create', 'ProductsController@create')->middleware('admin');
Route::get('products/{product}', 'ProductsController@show');
Route::get('products/{product}/edit', 'ProductsController@edit')->middleware('admin');
Route::put('products/{product}', 'ProductsController@update')->middleware('admin');
Route::get('products/{product}/delete', 'ProductsController@delete')->middleware('admin');
Route::delete('products/{product}', 'ProductsController@destroy')->middleware('admin');


/*
 * Categoriën
 */
Route::get('categories', 'categoriesController@index');
Route::post('categories', 'categoriesController@store')->middleware('admin');
Route::get('categories/create', 'categoriesController@create')->middleware('admin');
Route::get('categories/{product}', 'categoriesController@show')->middleware('admin');
Route::put('categories/{product}', 'categoriesController@update')->middleware('admin');
Route::delete('categories/{product}', 'categoriesController@destroy')->middleware('admin');
Route::get('categories/{product}/edit', 'categoriesController@edit')->middleware('admin');


/*
 * Profielen
 */
Route::get('/profile/{id}', 'ProfileController@profile')->middleware('admin');

Route::get('/profile', 'ProfileController@my_profile');


/*
 * Shopping cart
 */
Route::get('/addProduct/{productId}', 'CartController@addItem');
Route::get('/removeItem/{productId}', 'CartController@removeItem');
Route::get('/cart', 'CartController@showCart');