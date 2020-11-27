<x-app>

    <header class="relative mb-6">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg"
                alt=""
                class="mb-2"
            >
            <img src="{{ $user->avatar }}"
                alt=""
                class="absolute bottom-0 mr-2 origin-center transform -translate-x-1/2 translate-y-1/2 rounded-full"
                style="left: 50%"
                width="150px"
           >
        </div>


            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="mb-0 text-2xl font-bold"> {{ $user->name }} </h2>
                    <p1> Joined {{ $user->created_at->diffForHumans() }} </p1>
                </div>

                <div class='flex'>
                    @can ('edit', $user)
                        <a
                            href="{{ $user->path('edit') }}"
                            class="px-4 py-2 mr-2 text-xs text-black border border-gray-300 rounded-full">
                            Edit Profile
                        </a>

                    @endcan
                    <x-follow-button :user="$user"></x-follow-button>
                </div>
            </div>

            <p class="text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>



    </header>

    <hr>


    @include('_timeline', [
        'tweets'=> $user->tweets
    ]);

</x-app>
