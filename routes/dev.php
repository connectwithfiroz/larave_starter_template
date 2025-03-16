<?php

use App\Mail\DonationSuccessMail;
use Illuminate\Support\Facades\Mail;
Route::get('/fix-permissions', function () {
    $path = storage_path('app/public/product_img');
    chmod($path, 0777);
    return "Permissions fixed!";
});
Route::get('/clear-cache', function() {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache cleared!";
});
Route::get('/check-image/{filename}', function ($filename) {
    $path = storage_path("app/public/product_img/" . $filename);

    if (file_exists($path)) {
        return response()->file($path);
    } else {
        return "Image not found at: " . $path;
    }
});
Route::get('/fix-storage', function () {
    $target = storage_path('app/public');
    $link = public_path('storage');

    if (!file_exists($link)) {
        symlink($target, $link);
        return "Storage linked successfully!";
    } else {
        return "Storage link already exists.";
    }
});

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
Route::get('/run-queue', function () {
    // Process the next job on the queue and then exit.
    Artisan::call('queue:work', ['--once' => true]);

    return 'Queue job processed.';
});

Route::get('/test-mail', function () {
    // folowing code is not working
    $email = 'contacttofiroz@gmail.com';
    // $email = 'firoz000786000ansari@gmail.com';
    // $cc_email = [config('app.MAIL_TO_ADDRESS'), config('app.CC_MAIL_ADDRESS')];
    $donation_success_url = 'https://www.google.com';
    Mail::to($email)->send(new DonationSuccessMail($donation_success_url));
    return 'Mail sent sumit!';
    
    //-----working code
    \Illuminate\Support\Facades\Mail::raw('This is a test email.', function ($message) {
        $message->to('contacttofiroz@gmail.com')
                ->subject('Test Email from Laravel');
    });
    return 'Mail sent!';
});

