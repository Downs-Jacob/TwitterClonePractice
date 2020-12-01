<div class = "px-8 py-6 mb-8 border border-blue-400 rounded-xl">
    <form method="POST" action="/tweets">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="Write Your Comrades a Message"
        ></textarea>

        <hr class="my-4">

        <footer class="flex items-center justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="your avatar"
                class="mr-2 rounded-full"
                width="50px"
                height="50px"
            >
            <button
                type="submit"
                class="px-10 py-1 text-sm text-white bg-blue-400 rounded-full shadow hover:bg-blue-600"
                >Jab</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-600 text-small">{{ $message }}</p>
    @enderror

</div>
