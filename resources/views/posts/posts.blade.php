<x-layout>
    @include('posts._posts_header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($posts->count())
            <x-post_grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">No Post Yet. Please Visit Later...</p>
        @endif

    </main>
</x-layout>
