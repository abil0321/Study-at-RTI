<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Using Components</title>
</head>

<body class="bg-gray-900 text-white">
    <x-partials.header />

    {{-- <section class="container mx-auto p-5">
        {{ $slot }}
    </section> --}}

    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-800 p-6 text-white">
            {{-- {{ $sidebar }} --}}
            <x-partials.sidebar :menus="[
                ['name' => 'Home', 'link' => '/'],
                ['name' => 'List Perusahaan', 'link' => route('perusahaan.index')],
                ['name' => 'About', 'link' => '#'],
                ['name' => 'Contact', 'link' => '#'],
            ]" />
        </aside>

        <main class="flex-1 bg-gray-900 p-6">
            {{ $main }}
        </main>
    </div>

    <x-partials.footer />
</body>

</html>
