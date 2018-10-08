<?php

// use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::get('/tienda', 'ShopController@index')->name('shop.index');
Route::get('/tienda/{product}', 'ShopController@show')->name('shop.show');

//Route::view('cart', 'cart');
Route::get('/carrito', 'CartController@index')->name('cart.index');
Route::post('carrito', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::get('/pago', 'CheckoutController@index')->name('checkout.index');
Route::post('/pago', 'CheckoutController@store')->name('checkout.store');

// Route::get('empty', function() {
// 	Cart::instance('saveForLater')->destroy();
// });


Route::get('/gracias', 'ConfirmationController@index')->name('confirmation.index');
