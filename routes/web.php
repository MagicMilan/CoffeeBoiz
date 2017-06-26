<?php

Route::get('/', 'IndexController@index');
Route::get('/home', 'IndexController@index');

Auth::routes();


/*
 * Producten
 */
Route::get('/products', 'ProductsController@index');
Route::post('/products', 'ProductsController@store')->middleware('admin');
Route::get('/products/create', 'ProductsController@create')->middleware('admin');
Route::get('/products/{product}', 'ProductsController@show');
Route::get('/products/{product}/edit', 'ProductsController@edit')->middleware('admin');
Route::put('/products/{product}', 'ProductsController@update')->middleware('admin');
Route::get('/products/{product}/delete', 'ProductsController@delete')->middleware('admin');
Route::delete('/products/{product}', 'ProductsController@destroy')->middleware('admin');


/*
 * Categoriën
 */
Route::get('/categories', 'CategoriesController@index');
Route::post('/categories', 'CategoriesController@store')->middleware('admin');
Route::get('/categories/create', 'CategoriesController@create')->middleware('admin');
Route::get('/categories/{product}', 'CategoriesController@show')->middleware('admin');
Route::put('/categories/{product}', 'CategoriesController@update')->middleware('admin');
Route::delete('/categories/{product}', 'CategoriesController@destroy')->middleware('admin');
Route::get('/categories/{product}/edit', 'CategoriesController@edit')->middleware('admin');


/*
 * Users
 */
Route::get('/users', 'UsersController@index')->middleware('admin');
Route::get('/users_desc', 'UsersController@indexDesc')->middleware('admin');

Route::get('/users/sort_name', 'UsersController@sortName')->middleware('admin');
Route::get('/users/sort_name_desc', 'UsersController@sortNameDesc')->middleware('admin');

Route::get('/users/sort_created_at', 'UsersController@sortCreatedAt')->middleware('admin');
Route::get('/users/sort_created_at_desc', 'UsersController@sortCreatedAtDesc')->middleware('admin');

Route::get('/users/sort_type', 'UsersController@sortType')->middleware('admin');
Route::get('/users/sort_type_desc', 'UsersController@sortTypeDesc')->middleware('admin');

Route::get('/users/search/', 'UsersController@search')->middleware('admin');


Route::put('/users/{id}', 'UsersController@setAdmin')->middleware('admin');
Route::get('/users/{id}/delete', 'UsersController@delete')->middleware('admin');
Route::delete('/users/{id}', 'UsersController@destroy')->middleware('admin');

/*
 * Profielen
 */
Route::get('/profile/{id}', 'ProfileController@profile')->middleware('admin');
Route::get('/profile', 'ProfileController@my_profile')->middleware('facebook');


/*
 * Shopping cart
 */
Route::get('/addProduct/{productId}', 'CartController@addItem')->middleware('auth');
Route::get('/removeItem/{productId}', 'CartController@removeItem')->middleware('auth');
Route::get('/cart', 'CartController@showCart')->middleware('auth');


/*
 * Order
 */
Route::put('/checkout', 'OrderController@checkout')->middleware('auth');
Route::get('/order/{orderId}', 'OrderController@viewOrder')->middleware('auth');

Route::get('/orders', 'OrderController@viewOrders')->middleware('admin');

Route::get('/orders/send', 'OrderController@viewSend')->middleware('admin');
Route::get('/orders/not_send', 'OrderController@viewNotSend')->middleware('admin');

Route::put('/order/{orderId}/send', 'OrderController@setSend')->middleware('admin');
Route::put('/order/{orderId}/not_send', 'OrderController@setNotSend')->middleware('admin');


/*
 * Facebook login
 */
//Route::get('/redirect', 'SocialAuthController@redirect');
//Route::get('/callback', 'SocialAuthController@callback');

/*
 * Facebook Register
 */
//Route::get('/facebook/register', 'Auth\RegisterController@registerFacebookView');
//Route::put('/facebook/register', 'Auth\RegisterController@registerFacebook');