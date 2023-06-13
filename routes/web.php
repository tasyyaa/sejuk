<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\acceptPaymentController;
use App\Http\Controllers\ReturnPackageController;
use App\Http\Controllers\returnPaymentController;
use App\Http\Controllers\applyForReturnController;
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

Route::controller(ReturnPackageController::class)->group(function(){
    Route::get('/returnpackage','create');
    Route::post('/returnpackage/store','store');
    Route::get('/returnpackagecomplete', 'complete');
});

Route::controller(applyForReturnController::class)->group(function(){
    Route::get('/applyforreturn','create');
    Route::post('/applyforreturn/store','store');
    Route::get('/applyforreturncomplete', 'complete');
});

Route::controller(acceptPaymentController::class)->group(function(){
    Route::get('/acceptpayment','create');
    Route::post('/acceptpayment/store','store');
    Route::get('/returncomplete', 'complete');
    Route::get('/transferinprocess','tip');
    Route::get('/transfersuccess','ts');
    Route::get('/ordershippedvendor','confpack1');
    Route::get('/orderreturnedvendor','confpack2');
    Route::get('/ordercompletedvendor','completed');
});

Route::controller(returnPaymentController::class)->group(function(){
    // Route::get('/ordersummary', 'index');
    Route::get('/returnpayment','create');
    Route::post('/returnpayment/store','store');
    Route::get('/returncomplete', 'complete');
    Route::get('/returnpaymentprocess/{id}', 'rip');
    Route::get('/returnpaymentsuccess', 'rps');
});

Route::controller(CheckController::class)->group(function(){
    // Route::get('/ordersummary', 'index');
    Route::get('/myOrderList', 'myorderlist');
});

//development
Route::get('/cartvendor', function () {
    return view('cartOwnerPage');
});
Route::get('/cartDetailsVendor', function () {
    return view('cartDetailsOwnerPage');
});
Route::get('/cartDetailsVendor2', function () {
    return view('cartDetailsOwner2Page');
});
Route::get('/cartDetailsVendorSuccess', function () {
    return view('cartDetailsOwnerPageSuccess');
});
