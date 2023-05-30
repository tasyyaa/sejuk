<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\addCostumeController;
use App\Http\Controllers\acceptPaymentController;
use App\Http\Controllers\returnPackageController;
use App\Http\Controllers\returnPaymentController;
use App\Http\Controllers\applyForReturnController;
use App\Http\Controllers\chooseController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::controller(addCostumeController::class)->group(function(){
    Route::get('/vendorCatalog', 'index');
    Route::get('/vendorCatalog/addCostume','create');
    Route::post('/vendorCatalog/store','store');
    Route::get('/vendorCatalog/delete/{id}','hapus');
    Route::get('/vendorCatalog/addCostumeInvalid','view');
    // Route::get('/pegawai/cari','cari');
    // Route::get('/pegawai/view/{id}','view');
});

Route::controller(returnPackageController::class)->group(function(){
    // Route::get('/ordersummary', 'index');
    Route::get('/returnpackage','create');
    Route::post('/returnpackage/store','store');
    Route::get('/returnpackagecomplete', 'complete');
    Route::get('/orderSummary', 'view');
    Route::get('/orderSummaryConfirmed', 'viewconf');
});

Route::controller(applyForReturnController::class)->group(function(){
    // Route::get('/ordersummary', 'index');
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
    Route::get('/addaddress','create');
    Route::post('/addaddress/store','store');
    Route::get('/address', 'complete');
});

Route::controller(chooseController::class)->group(function(){
    Route::get('/costumepage', 'indexcostume');
    Route::get('/clothespage', 'indexclothes');
    Route::get('/clothespreview/{id}', 'preview');
});
