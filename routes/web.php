<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Livewire\BookingWizard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-packages', [\App\Http\Controllers\PackageController::class, 'index'])->name('all-packages');

// Package routes
Route::get('/packages/{package:slug}', [\App\Http\Controllers\PackageController::class, 'show'])
    ->name('package.show');

// Destination routes
Route::get('/destinations/{id}', [DestinationController::class, 'show'])
    ->where('id', '[a-z0-9-]+')
    ->name('destinations.show');

// Booking Wizard
Route::get('/book-now', function () {
    // Get package ID from query parameter
    $packageId = request()->query('package');
    
    // Debug information
    $debugInfo = [
        'package_query_param' => $packageId,
        'package_type' => gettype($packageId),
        'request_all' => request()->all(),
        'request_url' => request()->fullUrl(),
    ];
    
    \Log::info('Book Now Route Debug:', $debugInfo);
    
    // Dump debug info to response in local environment
    if (app()->environment('local')) {
        dump('Package ID from query parameter:', $packageId);
        dump('Package ID being passed to view:', $packageId ? (int)$packageId : null);
    }
    
    // Pass the package ID to the view
    return view('book-now', [
        'packageId' => $packageId ? (int)$packageId : null
    ]);
})->name('book-now');

// Debug route - REMOVE AFTER USE
Route::get('/debug/schema', function () {
    $columns = \DB::select('PRAGMA table_info(packages)');
    return response()->json($columns);
})->middleware('web');

// Debug booking data - REMOVE AFTER USE
Route::get('/debug/booking/{id}', function ($id) {
    $booking = \App\Models\Booking::findOrFail($id);
    return response()->json([
        'id' => $booking->id,
        'budget' => $booking->budget,
        'all_attributes' => $booking->toArray()
    ]);
})->middleware('web');

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
