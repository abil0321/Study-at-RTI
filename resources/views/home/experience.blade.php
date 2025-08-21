<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
</head>

<body>
    <ul>
        @foreach ($menus as $key => $value)
            <li>
                <a href="{{ $value }}">{{ $key }}</a>
            </li>
        @endforeach
    </ul>

    <h1>Experience</h1>
    <ul>
        {{-- TODO: for looping data start --}}
        {{-- @for ($i = 0; $i < count($experiences); $i++)
        <li>{{ $experiences[$i]['title'] }} - {{ $experiences[$i]['year'] }}</li>
        @endfor --}}
        {{-- TODO: for looping data end --}}

        {{-- TODO: foreach looping data start --}}
        {{-- @foreach ($experiences as $experience)
        <li>{{ $experience['title'] }} - {{ $experience['year'] }}</li>
        @endforeach --}}
        {{-- TODO: foreach looping data end --}}

        {{-- TODO: forelse looping data start --}}
        {{-- @forelse ($experiences as $experience)
        <li>{{ $experience['title'] }} - {{ $experience['year'] }}</li>
        @empty
        <h4>Experience Not Found !</h4>
        @endforelse --}}
        {{-- TODO: forelse looping data end --}}

        {{-- TODO: while looping data start --}}
        {{-- @php
        $index = 0;
        @endphp
        
        @while ($index < count($experiences))
        <li>{{ $experiences[$index]['title'] }} - {{ $experiences[$index]['year'] }}</li>
        @php
        $index++;
        @endphp
        @endwhile --}}
        {{-- TODO: while looping data end --}}

        {{-- TODO: continue & break in looping start --}}
        {{-- @foreach ($experiences as $experience)
            @if ($experience['year'] < 2022)
               // @continue
                @break
            @endif
            <li>{{ $experience['title'] }} - {{ $experience['year'] }}</li>
        @endforeach --}}
        {{-- TODO: continue & break in looping end --}}
    </ul>

    {{-- TODO: variable tersembunyi dari looping start --}}
    {{-- @foreach ($experiences as $experience) --}}
    {{-- <p>
            <b>{{ $loop->iteration }}</b>. {{ $experience['title'] }} - {{ $experience['year'] }} - index ke
            <b>{{ $loop->index }}</b>
            - reverse dari index <b>{{ $loop->remaining }}</b> - <b>{{ $loop->count }}</b> Total Pengalaman
        </p> --}}

    {{-- @if ($loop->first)
            <p>Pengalaman Kerja Pertama: {{ $experience['title'] }} - {{ $experience['year'] }}</p>
        @elseif ($loop->last)
            <p>Pengalaman Kerja Terakhir: {{ $experience['title'] }} - {{ $experience['year'] }}</p>
        @else
            <p>{{ $experience['title'] }} - {{ $experience['year'] }}</p>
        @endif --}}
    {{-- @endforeach --}}
    {{-- TODO: variable tersembunyi dari looping end --}}

    {{-- TODO: kondisi dalam attribute class start --}}
    {{-- @foreach ($experiences as $experience)
    <p
    class="{{ $experience['year'] < 2022 ? 'text-red-500' : 'text-green-400' }} {{ $loop->first ? 'font-bold mb-3' : ($loop->last ? 'italic mt-3' : 'font:default') }}">
    <b>{{ $loop->iteration }}</b>. {{ $experience['title'] }} - {{ $experience['year'] }} - index ke
    <b>{{ $loop->index }}</b>
    - reverse dari index <b>{{ $loop->remaining }}</b> - <b>{{ $loop->count }}</b> Total Pengalaman
    </p>
    @endforeach --}}
    {{-- TODO: kondisi dalam attribute class end --}}

    {{-- TODO: include function (untuk component reusable) start --}}
    @foreach ($experiences as $experience)
        @include('partials._experience', ['exp' => $experience])
    @endforeach
    {{-- TODO: include function end --}}
</body>

</html>
