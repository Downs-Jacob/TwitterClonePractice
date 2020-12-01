
@unless (auth()->user()->is($user))

    <form method="POST" action="/profiles/{{ $user->username }}/follow">
        @csrf

        <button type="submit"
            class="px-2 py-2 text-xs text-white bg-blue-500 rounded-full shadow"
        >

            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>

@endunless
