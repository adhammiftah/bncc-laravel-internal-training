<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/books');

Route::get('/books', [BookController::class, 'index'])->name('home');
Route::get('/books/create', [BookController::class, 'create'])->name('create_book');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('edit_book');
Route::post('/books', [BookController::class, 'store'])->name('store_book');
Route::get('/books/{id}', [BookController::class, 'show'])->name('show_book');
Route::put('/books/{id}', [BookController::class, 'update'])->name('update_book');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('delete_book');

Route::get('/transaction/{id}', [BookController::class, 'buyMenu'])->name('buy_menu_book');
Route::post('/transaction/{id}', [BookController::class, 'purchase'])->name('purchase_book');
Route::get('/transactions', [BookController::class, 'showTransactions'])->name('show_transactions');

Route::post('/reviews', [ReviewController::class, 'store'])->name('store_review')->middleware('auth');

require __DIR__.'/auth.php';
