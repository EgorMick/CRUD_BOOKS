<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('books.create');
    }
}
