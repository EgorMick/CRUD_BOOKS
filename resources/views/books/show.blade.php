@extends('books.app')
@section('content')
    <div>
        <div>{{$book->id}}. {{$book->title}}</div>
        <div>Описание: {{$book->description}}</div>
        <div>Картинка: {{$book->image}}</div>
        <div>
            Авторы:
            @if($book->authors->isNotEmpty())
                @foreach($book->authors as $author)
                    {{ $author->name }}@if(!$loop->last), @endif
                @endforeach
            @else
                Неизвестные авторы
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
