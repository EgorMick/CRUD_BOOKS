<?php

namespace App\Http\Controllers\Post;

use App\Http\Filters\BookFilter;
use App\Http\Requests\Book\FilterRequest;
use App\Models\Book;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(BookFilter::class, ['queryParams'=>array_filter($data)]);

        $books = Book::filter($filter)->paginate(10);

//        $books = Book::paginate(10);
        return view('books.index', compact('books'));
    }
}
