<x-usermanagement::layouts.master>
    <h1>Hello World</h1>

    <p>Module: {!! config('usermanagement.name') !!}</p>
    @foreach ($people as $user)
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
    @endforeach
</x-usermanagement::layouts.master>
