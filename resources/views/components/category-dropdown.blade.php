<x-dropwdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 flex text-left lg:inline-flex">
            {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}

            <x-icons class="absolute pointer-events-none" style="right: 12px;" name="down-arrow" />
        </button>
    </x-slot>

    {{-- All --}}
    <x-dropdown_item href="/?{{ http_build_query(request()->except('category', 'page')) }}" :active="request()->routeIs('home')">
        All
    </x-dropdown_item>

    {{-- Shows from database dynamically --}}
    @foreach ($categories as $category)
        <x-dropdown_item
            href="/?category={{ $category->slug }} & {{ http_build_query(request()->except('category', 'page')) }}"
            :active="request()->is('categories/' . $category->slug)">
            {{ ucwords($category->name) }}
        </x-dropdown_item>
    @endforeach
</x-dropwdown>
