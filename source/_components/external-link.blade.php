@props(['href', 'title'])

<a
    href="{{ $href }}?utm_campaign=devrel&utm_medium=website&utm_source=juststeveking"
    target="_blank"
    rel="noopener nofollow"
    title="{{ $title }}"
    class="text-md font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600"
    {{ $attributes }}
>
    {{ $slot }}
</a>