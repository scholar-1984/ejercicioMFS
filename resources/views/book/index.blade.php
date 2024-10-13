@extends('layouts.app',['titulo' => 'Listado de libros'])
@section('content')
    <a href="{{route('book.new')}}"> <button type="button" class="btn btn-primary">Nuevo Registro</button></a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                @foreach ($cols as $col)
                    <th>{{ $col }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>

            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->book_id }} </td>
                    <td>{{ $record->title }}</td>
                    <td>{{ $record->author_id }} </td>
                    <td>{{ $record->category_id }}</td>
                    <td>{{ $record->price }} </td>
                    <td><a href="{{ url("/sale?desired_book=$record->book_id") }}"><button type="button"
                                class="btn btn-primary">Visualizar Ventas</button></a></td>
                    <td><a href="{{route('image.edit',['book_id' => $record->book_id])}}"><button type="button"
                        class="btn btn-primary">Ver Imagen</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
