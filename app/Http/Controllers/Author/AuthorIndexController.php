<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Book\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;

class AuthorIndexController extends BaseController
{
    public function __invoke()
    {
        $authors = Author::paginate(10);
        return view('authors.index', compact('authors'));
    }
}
