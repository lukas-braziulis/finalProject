<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\YearController;
use \App\Http\Controllers\WatchlistController;
use \App\Http\Controllers\MovieController;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(MovieController::class)->group(function(){
    Route::get('/', 'index')->name('movie.index');
});

Route::controller(DirectorController::class)->group(function(){
   Route::get('/directors', 'index')->name('directors.index');
    Route::get('/directors/show/{id}', 'show')->name('directors.show');
});

Route::controller(YearController::class)->group(function(){
    Route::get('/years', 'index')->name('years.index');
    Route::get('/years/{decade}', 'show')->name('years.show');
});

Route::controller(MovieController::class)->group(function(){
    Route::get('/movies/show/{url}', 'show')->name('movies.show');
});


Route::middleware(['auth', 'verified'])->group(function() {
    // Dashboard
    Route::get('/dashboard', [WatchlistController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/{id}', [WatchlistController::class, 'store'])->name('watchlist.store');
    Route::get('/dashboard/delete/{id}', [WatchlistController::class, 'destroy'])->name('watchlist.delete');
});

Route::middleware(['auth', 'verified'])->group(function() {
    // Directors
    Route::get('/directors/create', [DirectorController::class, 'create'])->name('directors.create');
    Route::post('/directors/store', [DirectorController::class, 'store'])->name('directors.store');
    Route::get('/directors/edit/{id}', [DirectorController::class, 'edit'])->name('directors.edit');
    Route::put('/directors/update/{id}', [DirectorController::class, 'update'])->name('directors.update');
    Route::get('/directors/delete/{id}', [DirectorController::class, 'destroy'])->name('directors.delete');
});

Route::middleware(['auth', 'verified'])->group(function() {
    // Movies
    Route::post('/movies/store', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
    Route::get('/movies/edit/{id}', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/movies/update/{id}', [MovieController::class, 'update'])->name('movies.update');
    Route::get('/movies/delete/{id}', [MovieController::class, 'destroy'])->name('movies.delete');
});




require __DIR__.'/auth.php';
