@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')
    <section itemscope itemtype="https://schema.org/Article">
        <header>
            <div class="space-y-1 border-b border-gray-200 pb-10 text-left dark:border-gray-700">
                <dl>
                    <div>
                        <dt class="sr-only">Published on</dt>
                        <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                            <time
                                    itemProp="datePublished"
                                    content="{{ date('Y-m-d H:i:s', $page->date) }}"
                                    datetime="{{ date('Y-m-d H:i:s', $page->date) }}"
                            >
                                {{ date('jS F Y', $page->date) }}
                            </time>
                        </dd>
                    </div>
                </dl>
                <div>
                    <h1 class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-14">
                        {{ $page->title }}
                    </h1>
                </div>
            </div>
        </header>
        <article
                itemprop="articleBody"
                class="divide-y divide-gray-400 py-6 lg:divide-y-0"
        >
            <div class="prose dark:prose-dark space-y-4 overflow-hidden border-b border-gray-200 dark:border-gray-700 pb-6">
                <p>{{ $page->description }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @if ($page->video)
                    <div>
                        <iframe
                            class="w-full aspect-video"
                            src="{{ $page->video }}"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                @endif
                @if ($page->slides)
                    <div class="w-full aspect-auto">
                        <p data-notist="{{ $page->slides }}">
                            View <a href="https://noti.st/{{ $page->slides }}">{{ $page->title }}</a> on Notist.
                        </p>
                        <script async src="https://on.notist.cloud/embed/002.js"></script>
                    </div>
                @endif
            </div>
            <div class="space-x-4 py-12 text-left dark:border-gray-700">
                @foreach ($page->meetups as $meetup)
                    <a
                            href="{{ '/blog/tags/' . $meetup }}"
                            title="View articles in laravel"
                            itemscope=""
                            itemtype="https://schema.org/DefinedTerm"
                            itemprop="name"
                            class="text-md font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600"
                    >
                        <span>{{ '#' . $meetup }}</span>
                        <span class="text-gray-900 dark:text-gray-100">/</span>
                    </a>
                @endforeach
            </div>
        </article>
    </section>
@endsection