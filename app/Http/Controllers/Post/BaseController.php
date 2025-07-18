<?php

namespace App\Http\Controllers\Post;

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
