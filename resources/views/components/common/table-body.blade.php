<div>
    <tbody>
        @foreach ($records as $record)

            <tr>
                @foreach ($record as $data)
                <td><i class="{{ $data['icon'] }}"></i>{{ $data['data'] }} </td>
                @endforeach

            </tr>
        @endforeach
    </tbody>
</div>
