<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\AuthController;

Route::get('/login',[AuthController::class,'ShowLoginForm'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

// Route for dashboard
Route::get('/', function () {
    return view('admin.dashboard'); // Load the view resources/views/admin/dashboard.blade.php
})->middleware('auth')->name('dashboard');

// Routes for Books
Route::prefix('books')->group(function () {
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books', [BookController::class, 'store'])->name('books.store');
    Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
    Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
    Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
});

// Route cho Người đọc
Route::prefix('readers')->group(function () {
    Route::get('/readers', [ReaderController::class, 'index'])->name('readers.index');
    Route::get('/readers/create', [ReaderController::class, 'create'])->name('readers.create');
    Route::post('/readers', [ReaderController::class, 'store'])->name('readers.store');
    Route::get('/readers/{id}', [ReaderController::class, 'show'])->name('readers.show');
    Route::get('/readers/{id}/edit', [ReaderController::class, 'edit'])->name('readers.edit');
    Route::put('/readers/{id}', [ReaderController::class, 'update'])->name('readers.update');
    Route::delete('/readers/{id}', [ReaderController::class, 'destroy'])->name('readers.destroy');
});

// Route cho Mượn sách
Route::prefix('borrows')->group(function () {
    Route::get('/borrows', [BorrowController::class, 'index'])->name('borrows.index');
    Route::get('/borrows/create', [BorrowController::class, 'create'])->name('borrows.create');
    Route::post('/borrows', [BorrowController::class, 'store'])->name('borrows.store');
    Route::get('/borrows/{id}', [BorrowController::class, 'show'])->name('borrows.show');
    Route::get('/borrows/{id}/edit', [BorrowController::class, 'edit'])->name('borrows.edit');
    Route::put('/borrows/{id}', [BorrowController::class, 'update'])->name('borrows.update');
    Route::delete('/borrows/{id}', [BorrowController::class, 'destroy'])->name('borrows.destroy');
    Route::get('/history/{reader_id}', [BorrowController::class, 'history'])->name('borrows.history');
});
