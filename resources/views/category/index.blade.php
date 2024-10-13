@extends('layouts.app',['titulo' => 'Listado de categorías'])
@section('content')
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
                    <td>{{ $record->category_id }} </td>
                    <td>{{ $record->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
