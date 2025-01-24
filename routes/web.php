<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('cars', [CarController::class, 'index'])->name('cars.index');

Route::middleware(['auth'])->group(function (){
    Route::get('cars/{id}', [CarController::class, 'show'])->name('cars.show');
});

Route::middleware(['auth'])->group(function () {
    Route::get('new-car', [CarController::class, 'create'])->name('cars.create');
    Route::post('new-car', [CarController::class, 'store'])->name('cars.store');
});

Route::get('rents', [RentController::class, 'index'])->middleware(AdminMiddleware::class)->name('rents.index');

require __DIR__.'/auth.php';
