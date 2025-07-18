@extends('books.app')
@section('content')
    <div>
        <form action="{{route('books.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input value="{{old('title')}}" name="title" type="text" class="form-control" id="title"
                       placeholder="Title">

                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Description">{{old('description')}}</textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input value="{{old('image')}}" name="image" type="text" class="form-control" id="Image"
                       placeholder="Image">
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="Author">Author</label>
                <input value="{{old('author')}}" name="author" type="text" class="form-control mb-3" id="author"
                       placeholder="Author">
                @error('author')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

@endsection
