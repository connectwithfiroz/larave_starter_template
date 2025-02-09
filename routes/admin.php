<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminBannerController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminTestimonialController;
use App\Http\Controllers\admin\AdminFaqController;
use App\Http\Controllers\admin\AdminprofileController;
use App\Http\Controllers\admin\DonationController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductController;


Route::get('/login', [AdminHomeController::class, 'index'])->name('admin-login');
Route::post('/login', [AdminHomeController::class, 'login_post']);
Route::get('logout', [AdminHomeController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => 'admin'], function () {

    Route::get('/dashboard', [AdminHomeController::class, 'dashboard'])->name('admin.dashboard');


    Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');



    Route::resource('news', NewsController::class);
    Route::resource('products', ProductController::class);
    

    /*Blog Crud */
    Route::get('/add-blog', [AdminBlogController::class, 'index'])->name('add-blog');
    Route::post('/add-blog', [AdminBlogController::class, 'store']);
    Route::get('/edit-blog/{id}', [AdminBlogController::class, 'edit'])->name('edit-blog');
    Route::post('/edit-blog/{id}', [AdminBlogController::class, 'update']);
    Route::get('/delete-blog', [AdminBlogController::class, 'destroy'])->name('delete-blog');
    Route::get('/view-blog', [AdminBlogController::class, 'view'])->name('view-blog');
    /*Banner Crud */

    Route::get('/add-banner', [AdminBannerController::class, 'index'])->name('add-banner');
    Route::post('/add-banner', [AdminBannerController::class, 'store']);
    Route::get('/edit-banner/{id}', [AdminBannerController::class, 'edit'])->name('edit-banner');
    Route::post('/edit-banner/{id}', [AdminBannerController::class, 'update']);
    Route::get('/delete-banner', [AdminBannerController::class, 'destroy'])->name('delete-banner');
    Route::get('/view-banner', [AdminBannerController::class, 'view'])->name('view-banner');

    /*Testimonial Crud */

    Route::get('/add-testimonial', [AdminTestimonialController::class, 'index'])->name('add-testimonial');
    Route::post('/add-testimonial', [AdminTestimonialController::class, 'store']);
    Route::get('/edit-testimonial/{id}', [AdminTestimonialController::class, 'edit'])->name('edit-testimonial');
    Route::post('/edit-testimonial/{id}', [AdminTestimonialController::class, 'update']);
    Route::get('/delete-testimonial/{id}', [AdminTestimonialController::class, 'destroy'])->name('delete-testimonial');
    Route::get('/view-testimonial', [AdminTestimonialController::class, 'view'])->name('view-testimonial');

    /*FAQ Crud */

    Route::get('/add-faq', [AdminFaqController::class, 'index'])->name('add-faq');
    Route::post('/add-faq', [AdminFaqController::class, 'store']);
    Route::get('/edit-faq/{id}', [AdminFaqController::class, 'edit'])->name('edit-faq');
    Route::post('/edit-faq/{id}', [AdminFaqController::class, 'update']);
    Route::get('/delete-faq', [AdminFaqController::class, 'destroy'])->name('delete-faq');
    Route::get('/view-faq', [AdminFaqController::class, 'view'])->name('view-faq');

    /*Admin Profile */

    Route::get('/admin-profile', [AdminprofileController::class, 'adminprofile'])->name('admin-profile');
    Route::post('/profile-update', [AdminprofileController::class, 'profileupdate'])->name('admin-profile-update');
    Route::post('/change-password', [AdminprofileController::class, 'changepassword'])->name('admin-change-password');

});
