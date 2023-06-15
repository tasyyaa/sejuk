<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\Auth\ChooseRoleController;
use App\Http\Controllers\HomepageController;

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

Route::get('/', [HomepageController::class, 'view']);

Route::middleware('guest:web,rentals')->get('choose-login', [ChooseRoleController::class, 'login'])
    ->name('choose-login'); // ok
Route::middleware('guest:web,rentals')->get('choose-register', [ChooseRoleController::class, 'register'])
    ->name('choose-register'); // ok

Route::controller(ChooseController::class)->group(function(){
    Route::get('/preview/{id}', 'preview')->name('preview');
});

Route::get('FAQ', function() {
    return view('FAQ');
});
