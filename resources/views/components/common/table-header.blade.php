<thead>
    <tr>
        @foreach ($headers as $header)
            <th><i class="{{ $header['icon'] }}"></i> {{ $header['title'] }}</th>
        @endforeach
    </tr>
</thead>
