<div class="">
    <h2 class="mb-4 text-xl font-bold">Menu</h2>
    <ul class="text-decoration-none space-y-5">
        @foreach ($menus as $menu)
            <li class="hover:underline hover:decoration-dotted"><a href="{{ $menu['link'] }}">{{ $menu['name'] }}</a></li>
        @endforeach
    </ul>
</div>
