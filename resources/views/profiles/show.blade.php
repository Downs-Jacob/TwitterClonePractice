<x-app>

    <header class="relative mb-6">
        <img
            src="/images/default-profile-banner.jpg"
            alt=""
            class="mb-2"
        >

            <div class="flex items-center justify-between mb-4">
                <div>
                    <h2 class="mb-0 text-2xl font-bold"> {{ $user->name }} </h2>
                    <p1> Joined {{ $user->created_at->diffForHumans() }} </p1>
                </div>

                <div class='flex'>
                    <a
                        href=""
                        class="px-4 py-2 mr-2 text-xs text-black border border-gray-300 rounded-full">
                        Edit Profile
                    </a>
                    <form method="POST" action="/profiles/{{ $user->name }}/follow">
                        @csrf
                        <button
                            type="submit"
                            class="px-2 py-2 text-xs text-white bg-blue-500 rounded-full shadow"
                        >
                            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
                        </button>
                    </form>
                </div>
            </div>

            <p class="text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <img
                src="{{ $user->avatar }}"
                alt=""
                class="absolute mr-2 rounded-full"
                style="width:150px; left: calc(50% - 75px); top: 138px "
            >


    </header>

    <hr>


    @include('_timeline', [
        'tweets'=> $user->tweets
    ]);

</x-app>
