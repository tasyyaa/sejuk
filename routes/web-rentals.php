<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard-rental', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard.rental');
