<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;

// Index
Route::get('/', [HomeController::class, 'index']);

// Informatie
Route::get('/informatie', function () {
    return view('informatie');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

// Additional Dashboard pages
Route::get('/dashboard/beoordelen', function () {
    return view('dashboard.beoordelen');
});

Route::get('/dashboard/testimonials', function () {
    return view('dashboard.testimonials');
});

// Aanmeldformulier
Route::get('/dashboard/aanmelden', function () {
    return view('dashboard.aanmeldformulier');
});

// Projecten
Route::get('/dashboard/projecten', [DashboardController::class, 'showAllProjects'])->name('projecten');
Route::get('/dashboard/projecten/{name}', [FormController::class, 'show'])->name('project.show');

// Form routes
Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form/store', [FormController::class, 'store'])->name('form.store');
Route::delete('/form/{id}', [FormController::class, 'destroy'])->name('form.destroy');

// Profiel
Route::get('/dashboard/profiel', function () {
    return view('dashboard.profiel');
});

// Breeze
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
