<div class="px-6 py-4 bg-gray-200 border border-gray-300 rounded-2xl">
    <h3 class="mb-4 text-xl font-bold"> Comrades </h3>
    <ul>

        @forelse (auth()->user()->follows as $user)
            <li>
                <div class="">
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                        <img
                            src="{{ $user->avatar }}"
                            alt=""
                            class="mb-2 mr-2 rounded-full"
                            width="40"
                            height="40"
                        >
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <p class="p-4">No Comrades Yet!</p>
        @endforelse
    </ul>
</div>

