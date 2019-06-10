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
    return redirect()->route('products.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController');
Route::get('products/{product}', 'ProductController@buy')->name('products.buy');
Route::get('checkout', 'CheckoutController@checkout')->name('checkout');
Route::get('place-order/{id}', 'CheckoutController@placeOrder')->name('checkout.order');
