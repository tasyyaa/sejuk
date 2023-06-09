<?php

use App\Http\Controllers\Auth\RegisteredVendorController;
use App\Http\Controllers\Auth\RegisteredVendornextController;
use App\Http\Controllers\Auth\rentalsController;
use App\Http\Controllers\Auth\rentalsconfirmpassController;
use App\Http\Controllers\Auth\rentalemailNotifController;
use App\Http\Controllers\Auth\rentalemailpromptController;
use App\Http\Controllers\Auth\rentalnewController;
use App\Http\Controllers\Auth\rentalresetController;
use App\Http\Controllers\Auth\rentalverifyController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:rentals')->group(function () {
    Route::get('registervendor', [RegisteredVendorController::class, 'create'])
        ->name('registervendor'); // ok

    Route::post('registervendor', [RegisteredVendorController::class, 'store']); // ok

    Route::get('loginvendor', [rentalsController::class, 'create']); // ok

    Route::post('loginvendor', [rentalsController::class, 'store'])
        ->name('loginvendor'); // ok

    Route::get('forgetvendor', [rentalresetController::class, 'create'])
        ->name('password.request.vendor'); // ok

    Route::post('forgetvendor', [rentalresetController::class, 'store'])
        ->name('password.email.vendor'); // ok

    Route::get('resetvendor/{token}', [rentalnewController::class, 'create'])
        ->name('password.reset.vendor'); // ok

    Route::post('resetvendor', [rentalnewController::class, 'store'])
        ->name('password.update.vendor'); // ok
});

Route::middleware('auth:rentals')->group(function () {
    Route::get('registervendornext', [RegisteredVendornextController::class, 'create'])
        ->name('registervendornext'); // ok

    Route::post('registervendornext', [RegisteredVendornextController::class, 'store']); // ok

//    Route::get('verify-email', [rentalemailpromptController::class, '__invoke'])
//        ->name('verification.notice');
//
//    Route::get('verify-email/{id}/{hash}', [rentalverifyController::class, '__invoke'])
//        ->middleware(['signed', 'throttle:6,1'])
//        ->name('verification.verify');
//
//    Route::post('email/verification-notification', [rentalemailNotifController::class, 'store'])
//        ->middleware('throttle:6,1')
//        ->name('verification.send');

    Route::get('rentalconfirm', [rentalsconfirmpassController::class, 'show'])
        ->name('password.confirm.vendor');

    Route::post('rentalconfirm', [rentalsconfirmpassController::class, 'store']);

    Route::post('logoutrental', [rentalsController::class, 'destroy'])
        ->name('logout.vendor'); // ok
});
