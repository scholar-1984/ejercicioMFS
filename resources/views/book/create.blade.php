@extends('layouts.app',['titulo' => 'Crear nuevo libro'])
@section('content')
<div class="container">
    <form action="{{ url("/book/new")}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Autor</label>
            <select class="form-select" name="author_id">
                @foreach ($authors as $author)
                <option value="{{ $author->author_id }}">{{$author->name}}</option>
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Categoría</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->category_id }}">{{$category->name}}</option>
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="text" class="form-control" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection
