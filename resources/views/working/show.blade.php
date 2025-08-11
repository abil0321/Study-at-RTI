<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working Show</title>
</head>

<body>
    @foreach ($menus as $key => $value)
        <ul>
            <li>
                <a href="{{ $value }}">{{ $key }}</a>
            </li>
        </ul>
    @endforeach
    <h1>{{ $title_page }}</h1>
    {{ dd($data) }}
</body>

</html>
