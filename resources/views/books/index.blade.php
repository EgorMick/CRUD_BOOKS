@extends('books.app')
@section('content')
    <div>
        <a href="{{route('books.create')}}" class="btn btn-primary mb-3 mt-3">Add new Book</a>
    </div>
    @foreach($books as $book)
            <ul class="nav">
                <li class="nav-item">
                    <a  class="nav-link" href="{{route('books.show', $book->id)}}" >  {{$book->id}}. {{$book->title}}</a>
                </li>
            </ul>
    @endforeach

    <div class="mt-3">
        {{$books->withQueryString()->links()}}
    </div>

@endsection
