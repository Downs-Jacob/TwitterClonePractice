<x-app>
   <form method="POST" action="{{ $user->path() }}"></form>
   @csrf
   @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                for='name'
            >
                name
            </label>

            <input class="w-full p-2 border border-gray-400"
                type="text"
                name="name"
                id="name"
                required
            >

            @error('name')
                <p class="mt-2 text-xs text-red-500"> {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                for='username'
            >
                Username
            </label>

            <input class="w-full p-2 border border-gray-400"
                type="text"
                name="username"
                id="username"
                required
            >

            @error('username')
                <p class="mt-2 text-xs text-red-500"> {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                for='email'
            >
                Email
            </label>

            <input class="w-full p-2 border border-gray-400"
                type="email"
                name="email"
                id="email"
                required
            >

            @error('email')
                <p class="mt-2 text-xs text-red-500"> {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                for='password'
            >
                password
            </label>

            <input class="w-full p-2 border border-gray-400"
                type="password"
                name="password"
                id="password"
                required
            >

            @error('password')
                <p class="mt-2 text-xs text-red-500"> {{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                for = "password_confirmation"
            >
                Password Confirmation
            </label>

            <input class="border border-gray-400 p-2 w-full"
                type="password"
                name="password_confirmation"
                id="password_confirmation"
            >
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

    </form>
</x-app>
