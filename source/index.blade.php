---
title: JustSteveKing - Consultant CTO, Software Engineer, Educator, Community Advocate | juststeveking.uk
pagination:
    collection: articles
    perPage: 5
---
@extends('_layouts.main')

@section('body')
    <section>
        <div class="prose prose-indigo text-gray-800 dark:text-gray-50 transition-colors duration-150 ease-in-out space-y-4">
            <p>
                <span class="mr-3 text-2xl">👋</span> Hey there, I'm Steve, but you may know me better as
                <x-external-link
                    href="https://twitter.com/JustSteveKing"
                    onclick="window.fathom.trackGoal('CZEGD7I0', 0);"
                    title="Check out my profile on twitter &quot;@JustSteveKing&quot;"
                >
                    @JustSteveKing
                </x-external-link>. I currently live in the Welsh Valleys, about 40 minutes north of Cardiff, with my wife and kids.
            </p>
            <p>
                I work as a Lead Software Enginner for a company called
                <x-external-link
                    href="https://www.carandclassic.com/"
                    onclick="window.fathom.trackGoal('GUNLOIKW', 0);"
                    title="Go check out where I work"
                >
                    Mumsnet
                </x-external-link>, the UK’s largest network for parents, with over 8 million unique visitors per month clocking up over 100 million page views. We regularly campaign on issues including support for families of children with special educational needs, improvements in postnatal and miscarriage care, and employment rights for working parents.
            </p>
            <p>
                I spend some of my spare time moonlighting as a consultant CTO, and freelance software engineer for various clients from around the world. As a consultant CTO I have been involved in some major Digital Transformation projects, revamping products and departments ready for an acquisition, API strategy and consulting, open source consulting and advising companies on their technical strategy.
            </p>
            <p>
                I have a
                <x-external-link
                    href="https://www.youtube.com/c/JustSteveKing"
                    title="Subscribe to my YouTube Channel"
                    onclick="window.fathom.trackGoal('CMIYFQF3', 0);"
                >
                    YouTube Channel
                </x-external-link> where I stream and release video content which is of an educational nature. The main focus of what I do here is to help combat imposter syndrome in other developers, and spend as much time as I can sharing the knowledge I have built up over the years.
            </p>
        </div>
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

        <div class="my-12 space-y-4">
            <x-sponsor-block :sponsors="$sponsors"/>
        </div>
    </section>
@endsection
