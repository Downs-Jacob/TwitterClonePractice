<ul>
    <li>
        <a href="/tweets" class="block mb-4 text-lg font-bold">
            Home
        </a>
    </li>
    <li>
        <a href="/explore" class="block mb-4 text-lg font-bold">
            Explore
        </a>
    </li>
    <li>
        <a href="{{route('profile', auth()->user())}}" class="block mb-4 text-lg font-bold">
            Profile
        </a>
    </li>
    <li>
        <form method="POST" action='/logout'>
            @csrf
            <button class="text-lg font-bold">Logout</button>
        </form>

    </li>
</ul>
