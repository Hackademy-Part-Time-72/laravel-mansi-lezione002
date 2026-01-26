    <ul>
        @foreach ($services as $service)
            <li>
                <a href="/{{ $url }}/{{ $service }}"> {{ $service }}</a>
            </li>
        @endforeach
    </ul>
