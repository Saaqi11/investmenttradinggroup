<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
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
Route::get('/get-membership/{subscription}', [PublicController::class, 'getMembership'])->name('get-membership');
Route::get('/subscriptions', [PublicController::class, 'subscriptions'])->name('subscriptions');
Route::get('/admin-login', [AuthController::class, 'adminLoginPage'])->name('login');
Route::get('/user-login', [PublicController::class, 'doLogin'])->name('user-login');
Route::post('/do-admin-login', [AuthController::class, 'doAdminLogin'])->name('do.login');
Route::get('/do-logout', [AuthController::class, 'doLogout'])->name('logout');
Route::get('/paypal-checkout/{subscription}', [PublicController::class, 'paypalCheckout'])->name('paypal-checkout');
Route::get('/payment-success/{data}', [PublicController::class, 'paypalSuccess'])->name('paypal-success');
Route::get('/paypal-error', [PublicController::class, 'paypalError'])->name('paypal-error');
Route::post('/user-signup/{subscription}', [PublicController::class, 'userSignup'])->name('user-signup');
Route::post('/user-signup/{subscription}', [PublicController::class, 'userSignup'])->name('user-signup');
Route::get('send/mail', [EmailController::class, 'sendMail'])->name('sendMail');

Route::prefix("admin")->name("admin.")->middleware(['auth:web','checkAdmin'])->group( function () {
    Route::get('/sales', [AdminController::class, 'sales'])->name('sales');
    Route::get('/coupons', [AdminController::class, 'couponsListing'])->name('coupons');
    Route::get('/pricing', [AdminController::class, 'showPricing'])->name('pricing');
    Route::post('/update-pricing', [AdminController::class, 'updatePricings'])->name('updatePricings');
    Route::get('/payments', [AdminController::class, 'paymentListing'])->name('payments');
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
    Route::prefix("email")->name("email.")->group(function () {
        Route::get('/show', [EmailController::class, 'emailListings'])->name('emailListings');
        Route::get('/send', [EmailController::class, 'sendEmail'])->name('sendEmail');
        Route::post('/store', [EmailController::class, 'storeEmail'])->name('storeEmail');
    });

    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');

    Route::prefix("category")->name("category.")->group(function () {
        Route::get('/show', [AdminController::class, 'showCategories'])->name('showCategories');
        Route::post('/store', [AdminController::class, 'storeCategory'])->name('storeCategory');
        Route::post('/fetch-category', [AdminController::class, 'fetchCategory'])->name('fetchCategory');
    });

});
Route::prefix("user")->name("user.")->middleware(['auth:web','checkPaymentStatus'])->group( function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('/re-subscription', [PublicController::class, 'reSubscription'])->name('re-subscription');
        Route::get('/fetch-data', [UserController::class, 'getCategoryData'])->name('getCategoryData');
});

Route::get('/subscriptions', [PublicController::class, 'subscriptions'])->name('subscriptions');
Route::get('/upgrade-subscription', [PublicController::class, 'upgradeSubscription'])->name('upgradeSubscription');
