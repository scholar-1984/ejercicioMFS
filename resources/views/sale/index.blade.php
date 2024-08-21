<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado ventas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
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
                    <td>{{ $record->book_book_id }}</td>
                    <td>{{ $record->sale_date }} </td>
                    <td>{{ $record->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
