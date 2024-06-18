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
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Aanmeldformulier
Route::get('/dashboard-2/aanmelden', function () {
    return view('dashboard.aanmeldformulier');
});

Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form/store', [FormController::class, 'store'])->name('form.store');
Route::delete('/form/{id}', [FormController::class, 'destroy'])->name('form.destroy');

require __DIR__ . '/auth.php';
