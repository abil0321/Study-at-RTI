@extends('app')
@section('content')
    <h1 class="mb-5 text-2xl font-bold">{{ $title_page }}</h1>
    <form action="{{ route('perusahaan.store') }}" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12 md:px-60">
                <h2 class="text-base/7 font-semibold text-white">Form Add</h2>
                <p class="mt-1 text-sm/6 text-gray-400">Menambah perusahaan baru yang terdaftar di dinas Kemnaker buat di
                    korupsi penghasilannya.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-full">
                        <label for="title" class="block text-sm/6 font-medium text-white">Nama Perusahaan</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <div class="shrink-0 select-none text-base text-gray-400 sm:text-sm/6">workcation.com/</div>
                                <input id="title" type="text" name="title" placeholder="Pertamina"
                                    class="block min-w-0 grow bg-transparent py-1.5 pl-1 pr-3 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-full">
                        <label for="release_date" class="block text-sm/6 font-medium text-white">Release Date: </label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <div class="shrink-0 select-none text-base text-gray-400 sm:text-sm/6">release date: </div>
                                <input id="release_date" type="date" name="release_date" placeholder="janesmith"
                                    class="block min-w-0 grow bg-transparent py-1.5 pl-1 pr-3 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-full">
                        <label for="cast" class="block text-sm/6 font-medium text-white">Cast</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <div class="shrink-0 select-none text-base text-gray-400 sm:text-sm/6">cast: </div>
                                <input id="cast" type="text" name="cast"
                                    placeholder="'Cillian Murphy', 'Emily Blunt', ....."
                                    class="block min-w-0 grow bg-transparent py-1.5 pl-1 pr-3 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-full">
                        <label for="genres" class="block text-sm/6 font-medium text-white">Genres</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <div class="shrink-0 select-none text-base text-gray-400 sm:text-sm/6">genre:
                                </div>
                                <input id="genres" type="text" name="genres"
                                    placeholder="'Drama', 'History',
                                    ..."
                                    class="block min-w-0 grow bg-transparent py-1.5 pl-1 pr-3 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-full">
                        <label for="image" class="block text-sm/6 font-medium text-white">Poster</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <div class="shrink-0 select-none text-base text-gray-400 sm:text-sm/6">
                                    link image: </div>
                                <input id="image" type="text" name="image" placeholder="https://image...._.jpg"
                                    class="block min-w-0 grow bg-transparent py-1.5 pl-1 pr-3 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" />
                            </div>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
                        </div>
                        <p class="mt-3 text-sm/6 text-gray-400">Write a few sentences description of this company.</p>
                    </div>

                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                </div>
            </div>
        </div>
    </form>
@endsection
