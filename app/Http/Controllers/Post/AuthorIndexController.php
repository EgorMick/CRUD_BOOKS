<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;

class AuthorIndexController extends BaseController
{
    public function __invoke()
    {
        $authors = Author::paginate(10);
        return view('books.authors_index', compact('authors'));
    }
}
