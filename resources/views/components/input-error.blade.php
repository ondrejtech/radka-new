@if (!empty($messages))
    <ul {{ $attributes }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
