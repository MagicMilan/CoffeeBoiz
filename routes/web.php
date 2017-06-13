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

Route::get('/', 'IndexController@index');

Auth::routes();

/*
 * Producten
 */
// Route::resource('products', 'ProductsController');
Route::get('products', 'ProductsController@index');
Route::post('products', 'ProductsController@store');
Route::get('products/create', 'ProductsController@create')->middleware('admin');
Route::get('products/{product}', 'ProductsController@show')->middleware('admin');
Route::put('products/{product}', 'ProductsController@update');
Route::delete('products/{product}', 'ProductsController@destroy');
Route::get('products/{product}/edit', 'ProductsController@edit')->middleware('admin');


/*
 * Profielen
 */
Route::get('/profile/{id}', 'ProfileController@profile')->middleware('admin');

Route::get('/profile', 'ProfileController@my_profile');