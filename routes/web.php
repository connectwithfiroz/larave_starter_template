<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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
Route::get('/optimize', function () {
    Artisan::call('optimize');
    return "optimized";
});
Route::get('/migrate', function () {
    Artisan::call('migrate');
    return "Migrate Completed!";
});
Route::get('/link-storage', function () {
    Artisan::call('storage:link');
    return "Storage Linked!";
});

Route::get('/optimize', function () {
    Artisan::call('optimize');
    return "optimized";
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/achivement', [HomeController::class, 'achivement'])->name('achivement');
Route::get('/certifications', [HomeController::class, 'certifications'])->name('certifications');
Route::get('/construction', [HomeController::class, 'construction'])->name('construction');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/dontaion', [HomeController::class, 'dontaion'])->name('dontaion');
Route::get('/dontaions', [HomeController::class, 'dontaions'])->name('dontaions');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/managment-body', [HomeController::class, 'managmentBody'])->name('managment-body');
Route::get('/mission', [HomeController::class, 'mission'])->name('mission');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/our-project', [HomeController::class, 'ourProject'])->name('our-project');
Route::get('/our-team', [HomeController::class, 'ourTeam'])->name('our-team');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/refund-return-policy', [HomeController::class, 'refundReturnPolicy'])->name('refund-return-policy');
Route::get('/terms-conditions', [HomeController::class, 'termsConditions'])->name('terms-conditions');
Route::get('/zakat', [HomeController::class, 'zakat'])->name('zakat');




Route::get('/search-donation', [HomeController::class, 'searchDonation'])->name('donations.search.post');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\RazorpayController;

Route::get('/donate', [RazorpayController::class, 'donationForm'])->name('donate.form');
Route::post('/process-payment', [RazorpayController::class, 'processPayment'])->name('payment.process');
Route::post('/verify-payment', [RazorpayController::class, 'verifyPayment'])->name('payment.verify');
Route::get('/donate-success/{id}', [RazorpayController::class, 'donationSuccess'])->name('donate.success');

