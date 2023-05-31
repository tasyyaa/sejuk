<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\RegisteredVendorController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\rentalsController;
use App\Http\Controllers\Auth\rentalsconfirmpassController;
use App\Http\Controllers\Auth\rentalemailNotifController;
use App\Http\Controllers\Auth\rentalemailpromptController;
use App\Http\Controllers\Auth\rentalnewController;
use App\Http\Controllers\Auth\rentalresetController;
use App\Http\Controllers\Auth\rentalverifyController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {


    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('/registervendor', [RegisteredVendorController::class, 'create'])
        ->name('registervendor');

    Route::post('registervendor', [RegisteredVendorController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('loginvendor', [rentalsController::class, 'create']);


    Route::post('loginvendor', [rentalsController::class, 'store'])
    ->name('loginvendor');

    Route::get('signin', function () {
        return view('auth.signin');
    });

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('forgetvendor', [rentalresetController::class, 'create'])
                ->name('password.request');

    Route::post('forgetvendor', [rentalresetController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');

    Route::get('resetvendor/{token}', [rentalnewController::class, 'create'])
                ->name('password.reset');

    Route::post('resetvendor', [rentalnewController::class, 'store'])
                ->name('password.update');

});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email', [rentalemailpromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::get('verify-email/{id}/{hash}', [rentalverifyController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::post('email/verification-notification', [rentalemailNotifController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::get('rentalconfirm', [rentalsconfirmpassController::class, 'show'])
                ->name('password.confirm');

    Route::post('rentalconfirm', [rentalsconfirmpassController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::post('logout', [rentalsController::class, 'destroy'])
                ->name('logout');
});
