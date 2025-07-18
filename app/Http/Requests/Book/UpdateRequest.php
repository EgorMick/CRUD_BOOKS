<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string',
            'authors' => 'array|nullable', // Выбранные авторы
            'authors.*' => 'integer|exists:authors,id',
            'new_author' => 'string|nullable', // Новый автор
        ];
    }
}
