<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
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


Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/get-membership', [PublicController::class, 'getMembership'])->name('get-membership');
Route::get('/admin-login', [AuthController::class, 'adminLoginPage'])->name('login');
Route::post('/do-admin-login', [AuthController::class, 'doAdminLogin'])->name('do.login');
Route::get('/do-admin-logout', [AuthController::class, 'doLogout'])->name('logout');


Route::prefix("admin")->name("admin.")->middleware(['auth:web','checkAdmin'])->group( function () {
    Route::get('/sales', [AdminController::class, 'sales'])->name('sales');
    Route::get('/coupons', [AdminController::class, 'couponsListing'])->name('coupons');
    Route::get('/pricing', [AdminController::class, 'pricingListing'])->name('pricing');
    Route::get('/support', [AdminController::class, 'support'])->name('support');
    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::prefix("homepage")->name("homepage.")->group(function () {
        Route::get('/sections', [AdminController::class, 'sections'])->name('sections');
        Route::get('/add-section', [AdminController::class, 'addSection'])->name('addSection');
        Route::post('/save-section', [AdminController::class, 'saveSection'])->name('saveSection');
        Route::get('/edit-section/{id}', [AdminController::class, 'editSection'])->name('editSection');
        Route::put('/update-section/{id}', [AdminController::class, 'updateSection'])->name('updateSection');
        Route::get('/delete-section/{id}', [AdminController::class, 'deleteSection'])->name('deleteSection');
        Route::put('/update-section-status/{id}', [AdminController::class, 'updateSectionStatus'])->name('updateSectionStatus');
        Route::put('/update-section-order/{id}', [AdminController::class, 'updateSectionOrder'])->name('updateSectionOrder');
    });
    Route::get('/email', [AdminController::class, 'email'])->name('email');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
});
