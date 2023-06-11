<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\addCostumeController;
use App\Http\Controllers\acceptPaymentController;
use App\Http\Controllers\returnPackageController;
use App\Http\Controllers\returnPaymentController;
use App\Http\Controllers\applyForReturnController;
use App\Http\Controllers\chooseController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\rentalsController;

use App\Http\Controllers\rentalnewpassController;
use App\Http\Controllers\rentalresetController;
use App\Http\Controllers\rentalconfirmpassController;
use App\Http\Controllers\rentalsemailverifnotifController;
use App\Http\Controllers\rentalsemailverifpromptController;
use App\Http\Controllers\rentalsverifyController;


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
    return view('homepage.homepage'); // ok
});

Route::controller(addCostumeController::class)->group(function(){
//    Route::get('/homepageVendor', 'index');
//    Route::get('/homepageVendor/addCostume','create');
//    Route::post('/vendorCatalog/store','store');
    Route::get('/vendorCatalog/delete/{id}','hapus');
//    Route::get('/vendorCatalog/addCostumeInvalid','view');
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
    Route::get('/addaddress','create');
    Route::post('/addaddress/store','store');
    Route::get('/address', 'complete');
    Route::get('/myOrderList', 'myorderlist');
});



Route::controller(chooseController::class)->group(function(){
    Route::get('/costumepage', 'indexcostume');
    Route::get('/clothespage', 'indexclothes');
    Route::get('/clothespreview/{id}', 'preview');
//    Route::get('/homepageGuest', 'homepageguest');
//    Route::get('/homepageCustomer', 'homepagecust');
//    Route::get('/homepageVendor', 'homepagevendor');
    Route::get('/myPurchases', 'mypurchases');
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
Route::get('/dev', function () {
    return view('cartOwnerPage');
});
Route::get('/dev2', function () {
    return view('cartDetailsOwnerPage');
});
Route::get('/dev3', function () {
    return view('cartDetailsOwner2Page');
});
Route::get('/dev4', function () {
    return view('cartDetailsOwnerPageSuccess');
});
