<div class="flex p-4 {{ $loop->last ? '' :  'border-b border-b-gray-400'}}">
    <div class="flex-shrink-0 mr-2">
        <a href="{{ route('profile', $tweet->user->name) }}">
            <img
                src="{{ $tweet->user->avatar }}"
                alt=""
                class="mr-2 rounded-full"
                width="60"
                height="60"
            >
        </a>
    </div>

    <div>
        <h5 class="mb-4 font-bold">
            <a href="{{ route('profile', $tweet->user->name) }}">
                {{ $tweet->user->name}}
            </a>
        </h5>
        <p class=text-sm>
            {{ $tweet->body }}
        </p>
    </div>

</div>
