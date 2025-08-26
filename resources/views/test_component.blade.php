<x-app>
    {{-- <div class="border-b border-t border-gray-200 text-white">
        <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <h1 class="text-center text-4xl font-bold">Welcome to Laravel 11 Components</h1>
            <p class="mt-6 text-center text-xl">This is a simple example app to learn how to use Laravel 11 with
                Component</p>
        </div>
    </div> --}}

    <x-slot name="main">
        <div class="border-b border-t border-gray-200 text-white">
            <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
                <h1 class="text-center text-4xl font-bold">Welcome to Laravel 11 Components</h1>
                <p class="mt-6 text-center text-xl">This is a simple example app to learn how to use Laravel 11 with
                    Component</p>
            </div>
        </div>
    </x-slot>
</x-app>
