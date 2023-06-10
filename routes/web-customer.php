<?php

use App\Http\Controllers\SuntController;
use Illuminate\Support\Facades\Route;

Route::controller(SuntController::class)->group(function(){
    Route::get('/profile', 'complete')->name('profile'); // ok
    Route::get('/profile/edit', 'create')->name('profile.edit'); // ok
    Route::post('/profile/edit', 'store'); // ok
});
