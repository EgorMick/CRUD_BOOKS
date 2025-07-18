<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'string',
            'description' => 'string',
            'image' => 'string',
            'author' => 'string'
        ];
    }
}
