<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <ul>
        @foreach ($menus as $key => $value)
            <li>
                <a href="{{ $value }}">{{ $key }}</a>
            </li>
        @endforeach
    </ul>

    <h1>Home</h1>
    {{-- * memanggil variabel compact --}}
    {{-- {{ $name }} --}}
    {{-- {!! $name !!} --}}

    <ul>
        <li>Name: {{ $user['name'] }}</li>
        <li>Email: {{ $user['email'] }}</li>
        {{-- TODO: Menggunakan if else biasa start --}}
        {{-- @if ($user['role'] == 'admin')
            <li>Role: Administrator</li>
        @elseif ($user['role'] == 'programmer')
            <li>Role: Programmer Application</li>
        @else
            <li>Role: {{ $user['role'] }}</li>
        @endif --}}
        {{-- TODO: Menggunakan if else biasa end --}}

        {{-- TODO: Ternary if else start --}}
        <li>Role:
            {{ $user['role'] == 'admin' ? 'Administrator' : ($user['role'] == 'programmer' ? 'Programmer Application' : 'Unknown') }}
        </li>
        {{-- TODO: Ternary if else end --}}
    </ul>

    {{-- TODO: Switch Case start --}}
    <h2>Work Category</h2>
    @switch($user['category'])
        @case('wfo')
            <h4>Work From Office</h4>
        @break

        @case('wfh')
            <h4>Work From Home</h4>
        @break

        @case('hybrid')
            <h4>Work From Home and Office</h4>
        @break

        @default
            <h4>Uncategorized</h4>
    @endswitch

    {{-- TODO: Switch Case end --}}
</body>

</html>
