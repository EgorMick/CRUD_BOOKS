<?php

namespace App\Services;

use App\Models\Author;
use App\Models\Book;

class BookService
{
    public function store($data)
    {
        $author = Author::firstOrCreate(['name' => $data['author']]);

        $book = Book::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $data['image']
        ]);

        $book->authors()->attach($author->id);
    }

    public function update($book, $data)
    {
        $book->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $data['image'],
        ]);

        $authorIds = $data['authors'] ?? [];

        if (!empty($data['new_author'])) {
            $newAuthor = Author::create(['name' => $data['new_author']]);
            $authorIds[] = $newAuthor->id;
        }

        $book->authors()->sync($authorIds);
    }
}
