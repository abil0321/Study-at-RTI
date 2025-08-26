@extends('app')

@section('content')
    <h1 class="mb-5 text-2xl font-bold">{{ $title_page }}</h1>
    <div class="flex flex-col items-start md:flex-row">
        <div class="flex-grow justify-center py-5 text-center">
            <img src="{{ $perusahaan['image'] }}" alt="{{ $perusahaan['image'] }}"
                class="h-148 relative w-full object-contain">
        </div>

        <div class="mt-5 w-full md:ml-10 md:mt-0 md:w-2/3">
            <div class="">
                <h3 class="my-2 border-b-2 pb-2 text-2xl font-bold">{{ $perusahaan['title'] }}</h3>
                <p class="text-sm"><span class="text-secondary">Release Date: </span> {{ $perusahaan['release_date'] }}</p>
            </div>

            <div class="my-5">Genre:
                @forelse ($perusahaan['genres'] as $genre)
                    <span class="rounded bg-yellow-500/50 p-1">{{ $genre }},</span>
                    @if ($loop->last)
                        <span class="rounded bg-yellow-500/50 p-1">{{ $genre }}</span>
                    @endif
                @empty
                @endforelse
            </div>

            <div class="my-5">Cast:
                @forelse ($perusahaan['cast'] as $cast)
                    {{ $cast }},
                    @if ($loop->last)
                        {{ $cast }}
                    @endif
                @empty
                @endforelse
            </div>

            <div class="my-5">
                <h4 class="text-2xl">Description</h4>
                <p>{{ $perusahaan['description'] }}</p>
            </div>

            <div class="space-x-2 transition-opacity">
                <a href="{{ route('perusahaan.edit', $movieId) }}" class="rounded bg-blue-800 px-2 py-1 hover:bg-blue-500">
                    📝
                    Edit</a>
                <form action="{{ route('perusahaan.destroy', $movieId) }}" style="display: none; opacity: 0;"
                    id="form-delete-{{ $movieId }}" method="POST">
                    @csrf
                    @method('DELETE')
                </form>

                <a href="{{ route('perusahaan.destroy', $movieId) }}"
                    onclick="event.preventDefault(); confirm('are you sure?'); document.getElementById('form-delete-{{ $movieId }}').submit() "
                    class="rounded bg-red-400 p-1 hover:bg-red-800">🗑️ Delete</a>

                <a href="{{ route('perusahaan.index') }}" class="rounded bg-yellow-400 p-1 hover:bg-yellow-600">🔙 Back</a>
            </div>
        </div>
    </div>
@endsection
