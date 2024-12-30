<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PageController::class, 'accueil']);
Route::get('/menu', [PageController::class, 'menu']);
Route::get('/galerie', [PageController::class, 'galerie']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/inscription', [PageController::class, 'inscription']);
Route::get('/evenement', [PageController::class, 'evenement']);
Route::get('/about', [PageController::class,  'about']);
Route::get('/blog', [PageController::class,  'blog']);

require __DIR__.'/auth.php';
