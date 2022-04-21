@props(['sponsors'])

<div class="space-y-8 sm:space-y-12">
    <div class="space-y-5">
        <h3 class="text-2xl font-extrabold tracking-tight sm:text-4xl">
            GitHub Sponsors
        </h3>
        <p class="text-lg text-gray-800 dark:text-gray-50 transition-colors duration-150 ease-in-out">
            The people below are all people who support my Open Source and community efforts using GitHub Sponsors, I couldn't do what I do without them.
        </p>
    </div>
    <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:gap-x-8 lg:gap-y-12 xl:grid-cols-6">

        @foreach($sponsors as $sponsor)
            <li>
                <a
                        href="https://github.com/{{ $sponsor->name }}"
                        title="Go check out {{ $sponsor->name }} on GitHub"
                        class="space-y-4"
                        target="_blank"
                        rel="noopener nofollow"
                        onclick="window.fathom.trackGoal('3IHSOOO1', 0);"
                >
                    <img
                            class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24"
                            src="https://github.com/{{ $sponsor->name }}.png"
                            alt="{{ $sponsor->name }} GitHub Avatar"
                    >
                    <div class="space-y-2">
                        <div class="text-center text-xs font-medium lg:text-sm">
                            <h3 class="text-gray-800 dark:text-gray-50 transition-colors duration-150 ease-in-out">{{ $sponsor->name }}</h3>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>