@extends('books.app')
@section('content')
    <div>
        <div>{{$book->id}}. {{$book->title}}</div>
        <div>Описание: {{$book->description}}</div>
        <div>Картинка: {{$book->image}}</div>
        <div>
            Авторы:
            @if($book->authors->isNotEmpty())
                <ul>
                    @foreach($book->authors as $author)
                        <li>
                            <a href="{{ route('authors.show', $author->id) }}">
                                {{ $author->name }}
                            </a>
                            @if(!empty($author->bio))
                                — {{ Str::limit($author->bio, 50) }}
                            @endif
                        </li>
                    @endforeach
                </ul>
            @else
                <div>Неизвестные авторы</div>
            @endif
        </div>
    </div>

    <div>
        <a href="{{route('books.edit', $book->id)}}">Edit</a>
    </div>

    <div>
        <form action="{{route('books.delete', $book->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>

    <div>
        <a href="{{route('books.index')}}">Back</a>
    </div>

@endsection
