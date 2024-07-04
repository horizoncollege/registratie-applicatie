<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UploadController;

// Index
Route::get('/', [HomeController::class, 'index']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

// Projecten
Route::get('/dashboard/projecten', [DashboardController::class, 'showAllProjects'])->name('projecten');
Route::get('/dashboard/projecten/{name}', [DashboardController::class, 'show'])->name('project.show');

// Beoordelen
Route::get('/dashboard/beoordelen', [DashboardController::class, 'showPendingProjects'])->name('beoordelen');

// Aanmeldformulier
Route::get('/dashboard/aanmelden', function () {
    return view('dashboard.aanmeldformulier');
});

// Form routes
Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form/store', [FormController::class, 'store'])->name('form.store');
Route::patch('/form/{id}/status', [FormController::class, 'updateStatus'])->name('form.updateStatus');
Route::delete('/form/{id}', [FormController::class, 'destroy'])->name('form.destroy');

// Profiel

Route::get('uploads/', [UploadController::class, 'index'])->name('uploads.index');
Route::post('uploads/create', [UploadController::class, 'create'])->name('uploads.create');
Route::post('uploads/store', [UploadController::class, 'store'])->name('uploads.store');
Route::get('/dashboard/profiel', function () {
    return view('dashboard.profiel');
});



// Informatie
Route::get('/informatie', function () {
    return view('informatie');
});

// Aanmeldformulier-home
Route::get('/aanmelden', function () {
    return view('aanmeldformulier-home');
});

// Breeze
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
    Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// routes/web.php
Route::post('uploads/store', [UploadController::class, 'store'])->name('uploads.store');


require __DIR__ . '/auth.php';
