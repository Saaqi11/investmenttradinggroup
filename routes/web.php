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


Route::group(['middleware' => ['auth:web','checkAdmin'], 'prefix' => 'admin', 'name' => "admin."], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
