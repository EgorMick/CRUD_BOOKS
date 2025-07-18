<?php

use App\Http\Controllers\BookController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\AuthorIndexController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\PhpMyAdminController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::group([], function () {
    Route::get('/books', [IndexController::class, '__invoke'])->name('books.index')->middleware(['auth']);
    Route::get('/authors', [AuthorIndexController::class, '__invoke'])->name('authors.index');
    Route::get('/books/create', [CreateController::class, '__invoke'])->name('books.create');
    Route::post('/books', [StoreController::class, '__invoke'])->name('books.store');
    Route::get('/books/{book}', [ShowController::class, '__invoke'])->name('books.show')->where('book', '[0-9]+');
    Route::get('/books/{book}/edit', [EditController::class, '__invoke'])->name('books.edit')->where('book', '[0-9]+');
    Route::patch('/books/{book}', [UpdateController::class, '__invoke'])->name('books.update');
    Route::delete('/books/{book}', [DestroyController::class, '__invoke'])->name('books.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
