<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;

// Index
Route::get('/', [HomeController::class, 'index']);

// Informatie
Route::get('/informatie', function () {
    return view('site.informatie');
});

// Dashboard
Route::get('/dashboard-2', function () {
    return view('dashboard.dashboard-2');
});

Route::get('/dashboard-2/beoordelen', function () {
    return view('dashboard.beoordelen');
});

Route::get('/dashboard-2/projecten', function () {
    return view('dashboard.projecten');
});

Route::get('/dashboard-2/testimonials', function () {
    return view('dashboard.testimonials');
});

// Profiel
Route::get('/dashboard-2/profiel', function () {
    return view('dashboard.profiel');
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
    return view('site.aanmeld-formulier');
});

//aanmeld-formulier.blade.php
// Route::post('/contact-form', [\App\Http\Controllers\FormController::class, 'store'])->name('form.store');
// Route::get('/dashboard-contact', [\App\Http\Controllers\FormController::class, 'index'])->name('index');
// Route::delete('/contact-form/{id}', [\App\Http\Controllers\FormController::class, 'destroy'])->name('form.delete');

Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form/store', [FormController::class, 'store'])->name('form.store');
Route::delete('/form/{id}', [FormController::class, 'destroy'])->name('form.destroy');


require __DIR__.'/auth.php';
