<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Study Validation</title>
</head>

<body class="">
    <x-partials.header />

    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-800 p-6 text-white">
            <x-partials.sidebar :menus="[
                ['name' => 'Home', 'url' => route('home.index')],
                ['name' => 'Working List', 'url' => route('working.index')],
                ['name' => 'About', 'url' => '#'],
                ['name' => 'Contact', 'url' => '#'],
            ]" />
        </aside>

        <main class="flex-1 bg-gray-900 p-6">
            {{ $main }}
        </main>
    </div>

    <x-partials.footer />
</body>

</html>
