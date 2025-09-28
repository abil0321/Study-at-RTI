<x-app>
    <x-slot name="main">
        <h1 class="mb-5 text-2xl font-bold">{{ $title_page }}</h1>
        <div class="grid grid-cols-2 gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
            @forelse ($workings as $working)
                <x-working.card :index="$loop->index" :title="$working['title']" :image="$working['image']"
                    :releasedate="$working['release_date']"></x-working.card>
            @empty
                <div class="my-5 flex-grow">
                    <h3 class="mt-2">Tidak ada data Perusahaan!</h3>
                    <span class="text">buat 1?</span>
                </div>

                <div class="mt-5 flex justify-center gap-3">
                    <a href="{{ route('working.create') }}" class="rounded bg-blue-800 p-2 hover:bg-blue-500">Add +</a>
                    <a href="{{ route('home.index') }}" class="rounded bg-red-800 p-2 hover:bg-red-500">Back 👈</a>
                </div>
            @endforelse
        </div>
    </x-slot>
</x-app>
