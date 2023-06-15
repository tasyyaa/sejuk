<?php

use App\Http\Controllers\SuntController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\ReturnPackageController;
use App\Http\Controllers\ApplyForReturnController;

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
    Route::get('/mypurchases/order/{id}', 'view')->name('order');
    Route::post('/confirmreceived/{id}', 'confirm')->name('order.confirm');
});

Route::controller(ReturnPackageController::class)->group(function() {
    Route::get('/returnpackage/{id}', 'create')->name('order.return-package');
    Route::post('/returnpackage/{id}', 'store');
});

Route::controller(ApplyForReturnController::class)->group(function(){
    Route::get('/applyforreturn/{id}','create')->name('order.apply-return');
    Route::post('/applyforreturn/{id}','store');
});
