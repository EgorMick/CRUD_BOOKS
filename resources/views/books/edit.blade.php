@extends('books.app')
@section('content')
    <div>
        <form action="{{route('books.update', $book->id) }}" method="post">
            @csrf
            @method('patch')
            <div>
                <p>Редактирование книги: <br>{{$book->id}}. {{$book->title}}</p>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Title"
                       value="{{$book->title}}">
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description"
                          placeholder="Description">{{$book->description}}</textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input name="image" type="text" class="form-control" id="Image" placeholder="Image"
                       value="{{$book->image}}">
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <!-- Кнопка для раскрытия списка -->
                <button class="btn btn-secondary mb-2 mt-3" type="button" onclick="toggleAuthorList()">
                    Выбрать авторов ▼
                </button>

                <!-- Скрытый блок с чекбоксами -->
                <div id="authorList"
                     style="display: none; border: 4px solid #807d7d; padding: 10px; border-radius: 5px;">
                    @php
                        $bookAuthorIds = $book->authors->pluck('id')->toArray(); // Вычисляем один раз
                    @endphp

                    @foreach($authors as $id => $name)
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="authors[]"
                                value="{{ $id }}"
                                id="author_{{ $id }}"
                                {{ in_array($id, $bookAuthorIds) ? 'checked' : '' }}>
                            <label class="form-check-label" for="author_{{ $id }}">
                                {{ $name }}
                            </label>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Поле для нового автора -->
            <div class="form-group mt-2">
                <label for="new_author">Добавить нового автора:</label>
                <input
                    name="new_author"
                    type="text"
                    class="form-control mt-1"
                    id="new_author"
                    placeholder="Введите имя нового автора">
            </div>

            <!-- Скрипт для раскрывающегося списка -->
            <script>
                function toggleAuthorList() {
                    let authorList = document.getElementById("authorList");
                    if (authorList.style.display === "none") {
                        authorList.style.display = "block";
                    } else {
                        authorList.style.display = "none";
                    }
                }
            </script>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>

@endsection
