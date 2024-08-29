<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Libro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
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
</body>

</html>
