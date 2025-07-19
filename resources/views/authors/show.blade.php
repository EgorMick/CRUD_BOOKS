@extends('books.app')

@section('content')
    <div>
        <div>{{ $author->id }}. {{ $author->name }}</div>
    </div>

    <div>
        Книги автора:
        @if($author->books->isNotEmpty())
            <ul>
                @foreach($author->books as $book)
                    <li>
                        <a href="{{ route('books.show', $book->id) }}">
                            {{ $book->title }}
                        </a>
                        @if(!empty($book->description))
                            — {{ Str::limit($book->description, 50) }}
                        @endif
                    </li>
                @endforeach
            </ul>
        @else
            <div>У автора пока нет книг</div>
        @endif
    </div>

    <div class="mt-2">
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Назад к списку авторов</a>
    </div>
@endsection
