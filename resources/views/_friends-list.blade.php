
    <h3 class="mb-4 text-xl font-bold">Comrades </h3>
    <ul>

        @foreach (auth()->user()->follows as $user)
            <li>
                <div class="">
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                        <img
                            src="{{ $user->avatar }}"
                            alt=""
                            class="mr-2 rounded-full"
                            width="40"
                            height="40"
                        >
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @endforeach

    </ul>

