<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;

class ShowController extends BaseController
{
    public function __invoke(Book $book)
    {
        $book->load('authors');
        return view('books.show', compact('book'));
    }
}
