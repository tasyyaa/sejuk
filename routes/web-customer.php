<?php

use App\Http\Controllers\SuntController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ChooseController;

Route::controller(SuntController::class)->group(function(){
    Route::get('/profile', 'complete')->name('profile'); // ok
    Route::get('/profile/edit', 'create')->name('profile.edit'); // ok
    Route::post('/profile/edit', 'store'); // ok
});

Route::controller(CartController::class)->group(function() {
    Route::get('/checkout', 'showCartPage')->name('cart');
    Route::post('/checkout/add', 'addToCart')->name('cart.add');
    Route::delete('/checkout/delete/{id}', 'deleteCart')->name('cart.delete');
});

Route::controller(OrderController::class)->group(function() {
    Route::post('/checkout', 'placeOrder');
});

Route::controller(ChooseController::class)->group(function(){
    Route::get('/mypurchases', 'mypurchases')->name('orders.user');
});
