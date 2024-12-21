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
Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('books.index');
    Route::get('/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/store', [BookController::class, 'store'])->name('books.store');
    Route::get('/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
    Route::post('/update/{id}', [BookController::class, 'update'])->name('books.update');
    Route::delete('/delete/{id}', [BookController::class, 'destroy'])->name('books.destroy');

});

// Route cho Người đọc
Route::prefix('readers')->group(function () {
    Route::get('/', [ReaderController::class, 'index'])->name('readers.index');
    Route::get('/create', [ReaderController::class, 'create'])->name('readers.create');
    Route::post('/store', [ReaderController::class, 'store'])->name('readers.store');
    Route::get('/edit/{id}', [ReaderController::class, 'edit'])->name('readers.edit');
    Route::post('/update/{id}', [ReaderController::class, 'update'])->name('readers.update');
    Route::delete('/delete/{id}', [ReaderController::class, 'destroy'])->name('readers.destroy');
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
});
