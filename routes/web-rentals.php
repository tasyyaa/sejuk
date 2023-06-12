<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\HomepageController;
use App\Http\Controllers\Vendor\SuntController;
use App\Http\Controllers\ReturnPackageController;
use App\Http\Controllers\Vendor\AddCostumeController;

Route::get('/', [HomepageController::class, 'homepage'])->name('homepage.vendor');

Route::controller(SuntController::class)->group(function(){
    Route::get('/profile', 'complete')->name('profile.vendor'); // ok
    Route::get('/profile/edit', 'create')->name('profile.edit.vendor'); // ok
    Route::post('/profile/edit', 'store'); // ok
});

Route::controller(AddCostumeController::class)->prefix('catalog')->group(function() {
    Route::get('add', 'create')->name('add-catalog');
    Route::post('add', 'store');
    Route::delete('/{id}', 'hapus')->name('delete-catalog');
});

Route::controller(ReturnPackageController::class)->group(function() {
    Route::get('/orders/{id}', 'view')->name('order');
    Route::get('/orderSummaryConfirmed', 'viewconf');
});
