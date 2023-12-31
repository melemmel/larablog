<x-panel>
    @auth
        <form action="/posts/{{ $post->slug }}/comments" method="POST" class="">
            @csrf
            <header class="flext items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="60" height="60"
                    class="rounded-xl">

                <h2>Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
                    placeholder="Quick, thing of something to say!" required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-form.button>Submit</x-form.button>
            </div>

        </form>
    @else
        <p class="font-semibold">
            <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Login</a>
            to leave a comment.
        </p>
    @endauth
</x-panel>
