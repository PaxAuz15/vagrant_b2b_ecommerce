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

Route::redirect('/', '/home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth'); //pide autorizacion por login antes de ingresar a esta accion

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth'); //pide autorizacion por login antes de ingresar a esta accion

Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth'); //pide autorizacion por login antes de ingresar a esta accion

Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth'); //pide autorizacion por login antes de ingresar a esta accion

Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth'); //pide autorizacion por login antes de ingresar a esta accion

Route::resource('orders', 'OrderController')->middleware('auth');

Route::get('paypal/checkout', 'PayPalController@getExpressCheckout');
Route::get('paypal/checkout-success', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');

