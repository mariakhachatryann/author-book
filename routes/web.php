<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;

Route::fallback(function () {
    abort(404, 'The page you’re looking for does not exist.');
});

Route::resource('authors', AuthorsController::class);
Route::resource('books', BooksController::class);

Route::prefix('admin')->group(function () {
    Route::match(['get', 'post'], '/login', [AdminController::class, 'login'])->name('login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

Route::get('/search', [SearchController::class, 'index'])->name('search');
