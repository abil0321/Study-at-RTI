<div class="group relative rounded-lg bg-gray-800 p-4 duration-500 ease-out hover:scale-105 hover:bg-amber-900">
    <a href="{{ route('perusahaan.show', $index) }}">
        <div class="flex-grow border-b-2 py-5">
            <img src="{{ $getImage }}" alt="{{ $image }}" class="w-full rounded-md">
        </div>
        <h3 class="mt-2">{{ $title }}</h3>
        <span class="text-sm">{{ $releasedate }}</span>
    </a>
    <div class="absolute right-2 top-5 space-x-1 opacity-0 transition-opacity group-hover:opacity-100">
        {{-- <button class="rounded bg-blue-800 p-1 hover:bg-blue-500">👁️‍🗨️</button> --}}
        <a href="{{ route('perusahaan.edit', $index) }}" class="rounded bg-blue-800 p-1 hover:bg-blue-500">📝</a>

        <form action="{{ route('perusahaan.destroy', $index) }}" style="display: none; opacity: 0;"
            id="form-delete-{{ $index }}" method="POST">
            @csrf
            @method('DELETE')
        </form>

        <a href="{{ route('perusahaan.destroy', $index) }}"
            onclick="event.preventDefault(); confirm('are you sure?'); document.getElementById('form-delete-{{ $index }}').submit() "
            class="rounded bg-white p-1 hover:bg-red-200">🗑️</a>
    </div>
</div>
