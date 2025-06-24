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
    return view('book-now');
})->name('book-now');

// Debug route - REMOVE AFTER USE
Route::get('/debug/schema', function () {
    $columns = \DB::select('PRAGMA table_info(packages)');
    return response()->json($columns);
})->middleware('web');
