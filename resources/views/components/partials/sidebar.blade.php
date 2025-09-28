<div class="">
    <h2 class="mb-4 text-xl font-bold">Menu</h2>
    <ul class="text-decoration-none space-y-2">
        @foreach ($menus as $menu)
            <li class="hover:underline hover:decoration-dotted">
                <a href="{{ $menu['path'] }}">
                    {{ $menu['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
