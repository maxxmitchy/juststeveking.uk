@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')
    <section>
        <div>
            <h2 class="text-3xl tracking-tight font-extrabold sm:text-4xl">
              {{ $page->title }}
            </h2>
            <p class="mt-3 text-xl sm:mt-4">
              {{ $page->description }}
            </p>
          </div>
        <div class="my-12 space-y-4">
            @foreach($page->articles($articles) as $article)
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