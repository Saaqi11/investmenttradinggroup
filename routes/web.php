<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/admin-login', [AuthController::class, 'adminLoginPage'])->name('login');
Route::post('/do-admin-login', [AuthController::class, 'doAdminLogin'])->name('do.login');
Route::get('/do-admin-logout', [AuthController::class, 'doLogout'])->name('logout');


Route::prefix("admin")->name("admin.")->middleware(['auth:web','checkAdmin'])->group( function () {
    Route::get('/sales', [AdminController::class, 'sales'])->name('sales');
    Route::get('/coupons', [AdminController::class, 'couponsListing'])->name('coupons');
    Route::get('/pricing', [AdminController::class, 'pricingListing'])->name('pricing');
    Route::get('/support', [AdminController::class, 'support'])->name('support');
    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::get('/homepage', [AdminController::class, 'homepage'])->name('homepage');
    Route::get('/email', [AdminController::class, 'email'])->name('email');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
});
