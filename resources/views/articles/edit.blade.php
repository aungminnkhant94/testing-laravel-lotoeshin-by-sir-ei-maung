@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Title</label>
                <input type="text"name="title"class="form-control"value="{{ $article->title }}">
            </div>

            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control">{{ $article->body }}</textarea>
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">
                        {{ $category['name'] }}
                    </option>
                    @endforeach
                </select>
            </div>
            <input type="submit"value="Edit Article"class="btn btn-outline-dark">
        </form>
    </div>
@endsection