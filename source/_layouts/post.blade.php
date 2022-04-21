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
                @yield('content')
            </div>

            <div class="space-x-4 py-12 text-left dark:border-gray-700">
                @foreach ($page->tags as $tag)
                    <a
                        href="{{ '/blog/tags/' . $tag }}"
                        title="View articles in laravel"
                        itemscope=""
                        itemtype="https://schema.org/DefinedTerm"
                        itemprop="name"
                        class="text-md font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600"
                    >
                        <span>{{ '#' . $tag }}</span>
                        <span class="text-gray-900 dark:text-gray-100">/</span>
                    </a>
                @endforeach
            </div>
        </article>
    </section>
@endsection