<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Index
Route::get('/', [HomeController::class, 'index']);

// Projecten
Route::get('/projecten', function () {
    return view('pages.projecten');
});

// Dashboard
Route::get('/dashboard-2', function () {
    return view('pages.dashboard-2');
});

// Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//aanmeld-formulier.blade.php
Route::get('/aanmelden', function () {
    return view('aanmeld-formulier');
});

require __DIR__.'/auth.php';