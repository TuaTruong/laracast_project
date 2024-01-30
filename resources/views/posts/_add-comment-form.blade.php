@auth
<x-pannel>
    <form action="/posts/{{ $post->slug }}/comments" method="post">
        @csrf

        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60" width="40" height="40" alt=""
                class="rounded-full">
            <h2 class="ml-4">Want to participate?</h2>
        </header>
        <div class="mt-6">
            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" id="" rows="5"
                placeholder="Leave your comment" required></textarea>
            @error('body')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end mt-4">
            <x-submit-button>Post</x-submit-button>
        </div>
    </form>
</x-pannel>
@else
<p class="font-semibold">
    <a href="/register" class="hover:underline uppercase">Register</a> or <a href="/login"
        class="hover:underline uppercase">log in</a> to leave a comment
</p>
@endauth
