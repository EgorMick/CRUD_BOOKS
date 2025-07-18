<?php

namespace App\Http\Controllers;


use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index(): string
    {
        // показать конкретные
        /*        $book = Book::where('author_id', 2);
                foreach ($book->get() as $book)
                {
                    dump($book->title);
                }
        */
        $books = Book::all();
        return view('books.index', compact('books'));

    }

    public function hello(){
        return 123;
    }

    public function create()
    {
        return view('books.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string',
            'author' => 'required|string'
        ]);

        $author = Author::firstOrCreate(['name' => $data['author']]);

        $book = Book::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $data['image']
        ]);

        $book->authors()->attach($author->id);

        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        //$book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book','authors'));
    }

    public function update(Book $book)
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'image' => 'string',
            'authors' => 'array|nullable', // Выбранные авторы
            'authors.*' => 'integer|exists:authors,id',
            'new_author' => 'string|nullable', // Новый автор
        ]);

        $book->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $data['image'],
        ]);

        $authorIds = $data['authors'] ?? [];

        // Если введён новый автор, создаём его и добавляем к списку
        if (!empty($data['new_author'])) {
            $newAuthor = Author::create(['name' => $data['new_author']]);
            $authorIds[] = $newAuthor->id;
        }

        // Привязываем всех авторов к книге
        $book->authors()->sync($authorIds);

        return redirect()->route('books.show', $book->id);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');

        //$book->restore();

    }







    public function delete()
    {
        $book = Book::find(11);
        $book->forceDelete();
        dd('deleted');

//        //если надо восстановить если реализованно мягкое удаление
//        $book = Book::withTrashed()->find(7);
//        $book->restore();
//        dd('recreate');
    }

    // создание с проверкой есть ли дубликат(по атрибуту)
    public function firstOrCreate()
    {
        $anotherBook = [
            'title' => 'newBook',
            'author_id' => '2'
        ];

        $book = Book::firstOrCreate([
            'title' => 'newBook'
        ], $anotherBook);
    }

    public function updateOrCreate()
    {
        $anotherBook = [
            'title' => 'ahah',
            'author_id' => '2'
        ];

        $book = Book::updateOrCreate([
            'title' => 'rofl'
        ], $anotherBook);
    }
}
