@auth
    <form action="/post/{{ $post->slug }}/comments" method="post" class="border border-gray-200 p-6 rounded-xl">
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="avatar" width="60" height="60"
                class="rounded-xl">
            <h2 class="ml-4">Want to Participate?</h2>
        </header>

        <div class="mt-5">
            <textarea name="body" id="body" rows="5" class="w-full focus:outline-none focus:ring py-2 px-1"
                placeholder="Quick, think something quick!" required></textarea>
        </div>
        @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
        @enderror
        <div class="flex justify-end mt-5 border-t border-gray-200">
            <button type="submit"
                class="mt-2 bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Post</button>
        </div>
    </form>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline hover:text-blue-800 text-blue-600">Register</a> or <a href="/login"
            class="hover:underline hover:text-blue-800 text-blue-600">Login </a> to leave a comment.
    </p>
@endauth
