<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;

class EditController extends BaseController
{
    public function __invoke(Book $book)
    {
        $book->load(['authors:id,name']);
        $authors = Author::pluck('name', 'id')->toArray();

        return view('books.edit', compact('book', 'authors'));
    }
}
