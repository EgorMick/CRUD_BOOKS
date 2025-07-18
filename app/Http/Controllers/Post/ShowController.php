<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Book;

class ShowController extends BaseController
{
    public function __invoke(Book $book)
    {
        //$book = Book::findOrFail($id);
        $book->load('authors');
        return view('books.show', compact('book'));
    }
}
