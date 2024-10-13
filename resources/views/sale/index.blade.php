@extends('layouts.app', ['titulo' => 'Listado de ventas'])
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
                    <td>{{ $record->sale_id }} </td>
                    <td>{{ $record->book_id }}</td>
                    <td>{{ $record->sale_date }} </td>
                    <td>{{ $record->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
