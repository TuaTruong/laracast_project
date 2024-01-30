<x-dropdown>
    <x-slot name="trigger">
        <button @click.away="show=false" class="flex w-full">
            {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}
            <x-icon name="down-arrow" style="right:12px" class="absolute pointer-events-none"/>
        </button>
    </x-slot>


    <x-dropdown-item href="/?{{ http_build_query(request()->except('category','page'))}}" :active="request()->routeIs('home')">
        All
    </x-dropdown-item>

    @foreach ($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category','page'))}}" :active="request()->is('*' . $category->slug) ">{{$category->name}}</x-dropdown-item>
    @endforeach

</x-dropdown>
