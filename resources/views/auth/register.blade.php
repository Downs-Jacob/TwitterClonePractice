<x-master>
    <div class="container flex justify-center mx-auto">
        <div class="px-12 py-8 bg-gray-400 border border-gray-300 rounded-xl">
            <div class="col-md-8">

                    <div class="mb-2 text-lg font-bold">{{ __('Register') }}</div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class='mb-2'>
                                <label class="block mb-2 text-xs font-bold uppercase text-grey-700" for="username">
                                    Username
                                </label>
                                <input class="w-full p-2 border border-gray-400" type="text" name="username" id="username" required>

                                @error('username')
                                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                                @enderror

                            </div>

                            <div class='mb-2'>
                                <label class="block mb-2 text-xs font-bold uppercase text-grey-700" for="name">
                                    name
                                </label>
                                <input class="w-full p-2 border border-gray-400" type="text" name="name" id="name" required>

                                @error('name')
                                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class='mb-2'>
                                <label class="block mb-2 text-xs font-bold uppercase text-grey-700" for="email">
                                    Email
                                </label>
                                <input class="w-full p-2 border border-gray-400" type="text" name="email" id="email"
                                    autocomplete="email" required>

                                @error('email')
                                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class='mb-2'>
                                <label class="block mb-2 text-xs font-bold uppercase text-grey-700" for="password">
                                    Password
                                </label>
                                <input class="w-full p-2 border border-gray-400" type="password" name="password" id="password"
                                    autocomplete="current-password" required>

                                @error('password')
                                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class='mb-2'>
                                <label class="block mb-2 text-xs font-bold uppercase text-grey-700" for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input class="w-full p-2 border border-gray-400" type="password" name="password_confirmation" id="password_confirmation" reqired-autocomplete="new-password">
                            </div>

                            <div class="mb-0 form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="px-6 py-4 text-sm text-white uppercase bg-blue-400 rounded">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</x-master>
