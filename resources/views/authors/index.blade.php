@extends('books.app')
@section('content')
    @foreach($authors as $author)
            <ul class="nav">
                <li class="nav-item">
                    <a  class="nav-link" href="{{route('authors.show', $author->id)}}" >  {{$author->id}}. {{$author->name}}</a>
                </li>
            </ul>
    @endforeach
    <div class="mt-3">
        {{$authors->links()}}
    </div>

@endsection
