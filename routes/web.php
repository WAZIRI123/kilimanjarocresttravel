<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Livewire\BookingWizard;
use App\Models\NewsletterSubscriber;
use App\Notifications\VerifyNewsletterEmail;

Route::get('/', function () {
    return view('welcome');
});

// About Us Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact Page
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show'])->name('contact');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');

Route::get('/all-packages', [\App\Http\Controllers\PackageController::class, 'index'])->name('all-packages');

// Package routes
Route::get('/packages/{package:slug}', [\App\Http\Controllers\PackageController::class, 'show'])
    ->name('package.show');

// Destination routes
Route::get('/destinations', [DestinationController::class, 'index'])
    ->name('destinations');
    
Route::get('/destinations/{id}', [DestinationController::class, 'show'])
    ->where('id', '[a-z0-9-]+')
    ->name('destinations.show');

    Route::get('/clear-cache', function() {
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('view:clear');
        $exitCode = Artisan::call('route:clear');
        $exitCode = Artisan::call('view:cache');
        $exitCode = Artisan::call('route:cache');
        $exitCode = Artisan::call('config:cache');
        
        $exitCode = Artisan::call('optimize');
        
        return 'Caches cleared!'; // This will be displayed when you visit /clear-cache
    })->name('clear.cache');
    
       Route::get('/storage-link', function() {
        $exitCode = Artisan::call('storage:link');
  
        return 'storage link'; // This will be displayed when you visit /clear-cache
    })->name('storage-link');

// Booking Wizard
Route::get('/book-now', function () {
    // Get package ID from query parameter
    $packageId = request()->query('package');
    
    // Pass the package ID to the view
    return view('book-now', [
        'packageId' => $packageId ? (int)$packageId : null
    ]);
})->name('book-now');

// Email template placeholder routes
Route::get('/itineraries', function () {
    return redirect('/')->with('message', 'Itineraries page coming soon!');
})->name('itineraries');

Route::get('/special-offers', function () {
    return redirect('/')->with('message', 'Special offers page coming soon!');
})->name('special-offers');

Route::get('/home', function () {
    return redirect('/');
})->name('home');

//news letter
Route::post('/subscribe', function () {
    $email = request('email');
    $subscriber = new \App\Models\NewsletterSubscriber();
    $subscriber->email = $email;
    $subscriber->save();
    $subscriber->notify(new VerifyNewsletterEmail());
    return redirect()->back()->with('success', 'You have been subscribed to our newsletter! please check your email for confirmation');
})->name('subscribe');
  Route::get('/special-offers', function () {
    return view('special-offers');
     })->name('special-offers');

Route::get('/verify-email/{subscriber}', function (NewsletterSubscriber $subscriber) {
    $subscriber->email_verified_at = now();
    $subscriber->save();
    return redirect()->route('special-offers')->with('success', 'Your email has been verified!');
})->name('verification.verify');
