<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Using Include</title>
</head>

<body class="bg-gray-900 text-white">
    @include('_partials._header')

    <section class="container mx-auto p-5">
        @yield('content')
    </section>
</body>

</html>
