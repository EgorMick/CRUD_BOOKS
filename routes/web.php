<?php


use App\Http\Controllers\Author\AuthorIndexController;
use App\Http\Controllers\Author\ShowControllerAuthor;
use App\Http\Controllers\Book\ShowController;
use App\Http\Controllers\Book\CreateController;
use App\Http\Controllers\Book\DestroyController;
use App\Http\Controllers\Book\EditController;
use App\Http\Controllers\Book\IndexController;
use App\Http\Controllers\Book\StoreController;
use App\Http\Controllers\Book\UpdateController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::group([], function () {
    Route::get('/books', [IndexController::class, '__invoke'])->name('books.index')->middleware(['auth']);
    Route::get('/authors', [AuthorIndexController::class, '__invoke'])->name('authors.index');
    Route::get('/authors/{author}', [ShowControllerAuthor::class, '__invoke'])->name('authors.show');

    Route::get('/books/create', [CreateController::class, '__invoke'])->name('books.create');
    Route::post('/books', [StoreController::class, '__invoke'])->name('books.store');
    Route::get('/books/{book}', [ShowController::class, '__invoke'])->name('books.show')->where('book', '[0-9]+');
    Route::get('/books/{book}/edit', [EditController::class, '__invoke'])->name('books.edit')->where('book', '[0-9]+');
    Route::patch('/books/{book}', [UpdateController::class, '__invoke'])->name('books.update');
    Route::delete('/books/{book}', [DestroyController::class, '__invoke'])->name('books.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
