<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\BorrowController;


// Route::get('/login', function () {
//     return view('admin.login');
// });

// Route::get('/register', function () {
//     return view('admin.register');
// });

// Route for dashboard
Route::get('/', function () {
    return view('admin.dashboard'); // Load the view resources/views/admin/dashboard.blade.php
})->name('dashboard');

// Routes for Books
Route::get('/books', [BookController::class, 'index'])->name('books.index');  // Show list of books

Route::get('/books/create', [BookController::class, 'create'])->name('books.create');  // Show form to create a new book

Route::post('/books', [BookController::class, 'store'])->name('books.store');  // Store a new book (POST method)

Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');  // Show details of a book

Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');  // Show form to edit a book

Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');  // Update a book (PUT method)

Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');  // Delete a book (DELETE method)
// Route cho Người đọc
Route::get('/readers', [ReaderController::class, 'index'])->name('readers.index');

Route::get('/readers/create', [ReaderController::class, 'create'])->name('readers.create');

Route::post('/readers', [ReaderController::class, 'store'])->name('readers.store');

Route::get('/readers/{id}', [ReaderController::class, 'show'])->name('readers.show');

Route::get('/readers/{id}/edit', [ReaderController::class, 'edit'])->name('readers.edit');

Route::put('/readers/{id}', [ReaderController::class, 'update'])->name('readers.update');

Route::delete('/readers/{id}', [ReaderController::class, 'destroy'])->name('readers.destroy');

// Route cho Mượn sách
Route::get('/borrows', [BorrowController::class, 'index'])->name('borrows.index');

Route::get('/borrows/create', [BorrowController::class, 'create'])->name('borrows.create');

Route::post('/borrows', [BorrowController::class, 'store'])->name('borrows.store');

Route::get('/borrows/{id}', [BorrowController::class, 'show'])->name('borrows.show');

Route::get('/borrows/{id}/edit', [BorrowController::class, 'edit'])->name('borrows.edit');

Route::put('/borrows/{id}', [BorrowController::class, 'update'])->name('borrows.update');

Route::delete('/borrows/{id}', [BorrowController::class, 'destroy'])->name('borrows.destroy');
