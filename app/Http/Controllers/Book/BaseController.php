<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Services\BookService;

class BaseController extends Controller
{
    public $service;

    public function __construct(BookService $service)
    {
        $this->service = $service;
    }
}
