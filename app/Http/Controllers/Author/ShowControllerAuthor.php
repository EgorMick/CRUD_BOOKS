<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Book\BaseController;
use App\Models\Author;

class ShowControllerAuthor extends BaseController
{
    public function __invoke(Author $author)
    {
        $author->load('books');
        return view('authors.show', compact('author'));
    }
}
