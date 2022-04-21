---
title: Talks by JustSteveKing
description: I often give community talks at meetups on anything from code quality to best practices and how to's.
pagination:
    collection: talks
    perPage: 500
---

@extends('_layouts.main')

@section('body')
    <section>
        <div class="my-12 space-y-4">
            @foreach($pagination->items as $article)
                <a
                        itemscope itemtype="https://schema.org/Article"
                        href="{{ $article->getUrl() }}"
                        itemprop="name"
                        aria-label="Read &quot;{{ $article->title }}&quot;"
                        title="Read &quot;{{ $article->title }}&quot;"
                        class="group block hover:scale-[1.025] transition-transform duration-150 ease-in-out"
                >
                    <div
                            class="border border-gray-100 px-4 py-3 space-y-1 rounded-md group-hover:border-indigo-500 transition-colors duration-150 ease-in-out"
                    >
                        <div class="flex items-start justify-between">
                            <h3 class="font-medium text-gray-800 dark:text-gray-50 transition-colors duration-150 ease-in-out">
                                {{ $article->title }}
                            </h3>

                            <time
                                    itemProp="datePublished"
                                    content="{{ date('Y-m-d H:i:s', $article->date) }}"
                                    datetime="{{ date('Y-m-d H:i:s', $article->date) }}"
                                    class="text-xs text-gray-600 dark:text-gray-200 transition-colors duration-150 ease-in-out underline decoration-dotted whitespace-nowrap"
                            >
                                {{ date('jS F Y', $article->date) }}
                            </time>
                        </div>

                        <section class="prose max-w-none prose-sky prose-headings:font-medium prose-p:my-0 text-gray-800 dark:text-gray-50 transition-colors duration-150 ease-in-out">
                            <div>
                                <p>{{ $article->description }}</p>
                            </div>
                        </section>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
