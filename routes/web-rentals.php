<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\HomepageController;
use App\Http\Controllers\Vendor\SuntController;

Route::get('/', [HomepageController::class, 'homepage']);

Route::controller(SuntController::class)->group(function(){
    Route::get('/profile', 'complete')->name('profile.vendor'); // ok
    Route::get('/profile/edit', 'create')->name('profile.edit.vendor'); // ok
    Route::post('/profile/edit', 'store'); // ok
});
