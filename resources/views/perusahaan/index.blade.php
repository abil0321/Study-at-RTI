<x-app>
    {{-- <x-slot name="sidebar">
        <ul class="text-decoration-none space-y-5">
            <li class="hover:underline hover:decoration-dotted"><a href="{{ route('home.') }}">Home</a></li>
            <li class="hover:underline hover:decoration-dotted"><a href="{{ route('perusahaan.index') }}">List
                    Perusahaan</a></li>
            <li class="hover:underline hover:decoration-dotted">About</li>
            <li class="hover:underline hover:decoration-dotted">Contact</li>
        </ul>
    </x-slot> --}}

    <x-slot name="main">
        <h1 class="mb-5 text-2xl font-bold">{{ $title_page }}</h1>
        <div class="grid grid-cols-2 gap-5 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5">
            @forelse ($perusahaans as $perusahaan)
                <x-perusahaan.card :index="$loop->index" :title="$perusahaan['title']" :image="$perusahaan['image']"
                    :releasedate="$perusahaan['release_date']"></x-perusahaan.card>
            @empty
                <div class="my-5 flex-grow">
                    <h3 class="mt-2">Tidak ada data perusahaan!</h3>
                    <span class="text-sm">buat 1?</span>
                </div>
                <div class="mt-5 flex justify-center gap-3">
                    <a href="{{ route('perusahaan.edit', $loop->index) }}"
                        class="rounded bg-blue-800 p-2 hover:bg-blue-500">Add
                        + </a>
                    <button class="rounded bg-red-800 p-2 hover:bg-red-500">Back 👈</button>
                </div>
            @endforelse
        </div>
    </x-slot>
</x-app>
