<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

require __DIR__."/dev.php";
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

Route::get('/our-developer', [HomeController::class, 'developer'])->name('developer');
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/achivement', [HomeController::class, 'achivement'])->name('achivement');
Route::get('/certifications', [HomeController::class, 'certifications'])->name('certifications');
Route::get('/construction', [HomeController::class, 'construction'])->name('construction');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/dontaion', [HomeController::class, 'dontaion'])->name('dontaion');
Route::get('/donation-options', [HomeController::class, 'dontaions'])->name('dontaions');
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
Route::get('/donation', [HomeController::class, 'donation'])->name('donation');
Route::get('/donations', [HomeController::class, 'donations'])->name('donations');
Route::post('/contact/send', [HomeController::class, 'sendMail'])->name('contact.send');




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
use App\Http\Controllers\VolunteerController;

// ----- USER DONATION HANDLE >>>
Route::get('/donate', [RazorpayController::class, 'donationForm'])->name('donate.form');
Route::post('/process-payment', [RazorpayController::class, 'processPayment'])->name('payment.process');
Route::post('/verify-payment', [RazorpayController::class, 'verifyPayment'])->name('payment.verify');
Route::get('/donate-success/{id}', [RazorpayController::class, 'donationSuccess'])->name('donate.success');
// ----- USER DONATION HANDLE <<<

// -----volunteer REGISTRATION HANDLE >>>
Route::get('/volunteer', [VolunteerController::class, 'volunteerForm'])->name('volunteer.form');
Route::post('/process-volunteer-payment', [VolunteerController::class, 'processPayment'])->name('volunteer.payment.process');
Route::post('/verify-volunteer-payment', [VolunteerController::class, 'verifyPayment'])->name('volunteer.payment.verify');
Route::get('/volunteer-success/{id}', [VolunteerController::class, 'success'])->name('volunteer.success');
// -----volunteer REGISTRATION HANDLE <<<

