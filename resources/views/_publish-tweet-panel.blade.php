<div class = "px-8 py-6 mb-8 border border-blue-400 rounded-lg">
    <form method="POST" action="/tweets">
        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="Write Your Comrades a Message"
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="your avatar"
                class="mr-2 rounded-full"
                width="50px"
                height="50px"
            >
            <button
                type="submit"
                class="px-6 py-1 text-white bg-blue-400 rounded-full shadow"
                >Jab</button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-600 text-small">{{ $message }}</p>
    @enderror

</div>
