<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $page->description }}">

        <title>{{ $page->title }}</title>

        <script type="module">
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
        </script>

        <link rel="preconnect" href="https://fonts.googleapis.com/">
        @if ($page->production)
            <link rel="preconnect" href="https://cdn.usefathom.com/">
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i,900,900i"
              rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:image" content="{{ $page->baseUrl . $page->social_image }}">
        <meta property="og:image:alt" content="{{ $page->social_image_alt }}">
        <meta property="og:locale" content="en_GB">
        <meta property="og:type" content="{{ $page->type ?? 'website' }}">
        <meta property="og:url" content="{{ $page->getUrl() }}">

        <meta name="twitter:widgets:new-embed-design" content="on">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $page->title }}">
        <meta name="twitter:description" content="{{ $page->description }}">
        <meta name="twitter:site" content="{{ $page->twitter }}">
        <meta name="twitter:creator" content="{{ $page->twitter }}">
        <meta name="twitter:image" content="{{ $page->baseUrl . $page->social_image }}">
        <meta name="twitter:image:alt" content="{{ $page->social_image_alt }}">

        <link rel="canonical" href="{{ $page->getUrl() }}">
        <link rel="icon" href="/assets/favicon.ico">
        <link rel="icon" href="/assets/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/assets/favicon.png">
        <link rel="manifest" href="/assets/site.webmanifest">
        <meta name="theme-color" content="#ffffff">

        <link rel="alternate" type="application/rss+xml" title="{{ $page->siteName }}" href="{{ $page->baseUrl.'/rss.xml' }}" />

        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

        <script type="application/ld+json">
            {
                "@content": "https://schema.org/",
                "@type": "Person",
                "name": "Steve McDougall",
                "url": "https://www.juststeveking.uk/",
                "image": "https://www.juststeveking.uk/images/avatar.webp",
                "sameAs": [
                    "https://github.com/JustSteveKing",
                    "https://twitter.com/JustSteveKing",
                    "https://www.linkedin.com/in/steve-mcdougall/"
                ],
                "jobTitle": "Lead Software Engineer",
                "worksFor": {
                    "@type": "Organization",
                    "name": "Mumsnet",
                    "url": "https://www.mumsnet.com/",
                    "foundingDate": "2000-03-20",
                    "sameAs": [
                        "https://www.linkedin.com/company/mumsnet",
                        "https://www.instagram.com/mumsnet/",
                        "https://www.youtube.com/user/mumsnet",
                        "https://www.pinterest.co.uk/mumsnet",
                        "https://twitter.com/mumsnettowers",
                        "https://facebook.com/mumsnet"
                    ],
                    "description": "We're the UK’s largest network for parents, with over 8 million unique visitors per month clocking up over 100 million page views. We regularly campaign on issues including support for families of children with special educational needs, improvements in postnatal and miscarriage care, and employment rights for working parents."
                }
            }

        </script>

        @if ($page->production)
        <!-- Fathom - beautiful, simple website analytics -->
            <script
                src="https://cdn.usefathom.com/script.js"
                data-site="SGJKEWOR"
                defer
            ></script>
            <!-- / Fathom -->
        @endif
    </head>
    <body class="text-gray-800 dark:text-gray-50 bg-gray-50 dark:bg-gray-800 font-sans antialiased min-h-screen min-w-screen px-4 overflow-auto">

        <section class="max-w-7xl mx-auto text-base pb-12 px-4 md:px-0">
            <header class="py-6 md:py-12 flex flex-col md:flex-row items-start justify-between">
                <div class="textcenter md:text-left">
                    <a href="/"
                       class="text-gray-800 dark:text-gray-50 text-lg dark:hover:text-gray-300 hover:text-gray-600 dark:focus:text-gray-300 focus:text-gray-600 transition-colors duration-150 ease-in-out">
                        <h1>juststeveking.uk</h1>
                    </a>

                    <p class="text-gray-400 dark:text-gray-300">
                        Lead Software Engineer at <a
                            href="https://www.mumsnet.com"
                            target="_blank"
                            rel="noopener nofollow"
                            class="underline"
                            title="Check out where I work"
                        >
                            Mumsnet
                        </a>.
                    </p>
                </div>

                <nav class="space-x-3">
                    @foreach ($page->navigation as $item)
                        <a
                                href="{{ $item->link }}"
                                title="{{ $item->title }}"
                                class="text-gray-400 hover:text-gray-800 focus:text-gray-800 dark:text-gray-300 dark:hover:text-gray-50 dark:focus:text-gray-50 hover:underline transition-colors duration-150 ease-in-out"
                        >
                            {{ $item->text }}
                        </a>
                    @endforeach
                </nav>
            </header>

            <main>
                @yield('body')
            </main>

            <footer class="py-6 md:py-12">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex justify-start md:justify-center space-x-6 md:order-2">
                        <a
                                href="https://www.youtube.com/c/JustSteveKing"
                                title="Subscribe to my YouTube Channel"
                                onclick="window.fathom.trackGoal('CMIYFQF3', 0);"
                                class="text-gray-400 hover:text-gray-800 focus:text-gray-800 dark:text-gray-300 dark:hover:text-gray-50 dark:focus:text-gray-50 hover:underline transition-colors duration-150 ease-in-out"
                        >
                            <span class="sr-only">YouTube Channel</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                 aria-hidden="true">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>

                        <a
                                href="https://www.linkedin.com/in/steve-mcdougall/"
                                title="Connect with me on LinkedIn"
                                onclick="window.fathom.trackGoal('C6E6URYJ', 0);"
                                class="text-gray-400 hover:text-gray-800 focus:text-gray-800 dark:text-gray-300 dark:hover:text-gray-50 dark:focus:text-gray-50 hover:underline transition-colors duration-150 ease-in-out"
                        >
                            <span class="sr-only">LinkedIn</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                 aria-hidden="true">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                            </svg>
                        </a>

                        <a
                                href="https://github.com/JustSteveKing"
                                title="Follow me on GitHub"
                                onclick="window.fathom.trackGoal('Q0HFSPVT', 0);"
                                class="text-gray-400 hover:text-gray-800 focus:text-gray-800 dark:text-gray-300 dark:hover:text-gray-50 dark:focus:text-gray-50 hover:underline transition-colors duration-150 ease-in-out"
                        >
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                            </svg>
                        </a>

                        <a
                                href="https://twitter.com/JustSteveKing"
                                title="Follow me on twitter"
                                onclick="window.fathom.trackGoal('Q0HFSPVT', 0);"
                                class="text-gray-400 hover:text-gray-800 focus:text-gray-800 dark:text-gray-300 dark:hover:text-gray-50 dark:focus:text-gray-50 hover:underline transition-colors duration-150 ease-in-out"
                        >
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M23.953 4.57a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 0 0-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 0 0-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 0 1-2.228-.616v.06a4.923 4.923 0 0 0 3.946 4.827 4.996 4.996 0 0 1-2.212.085 4.936 4.936 0 0 0 4.604 3.417 9.867 9.867 0 0 1-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 0 0 7.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0 0 24 4.59z"/></svg>
                        </a>

                        <a
                                href="https://discord.gg/jkbfSufNTq"
                                title="Join my Discord server"
                                onclick="window.fathom.trackGoal('CMIYFQF3', 0);"
                                class="text-gray-400 hover:text-gray-800 focus:text-gray-800 dark:text-gray-300 dark:hover:text-gray-50 dark:focus:text-gray-50 hover:underline transition-colors duration-150 ease-in-out"
                        >
                            <span class="sr-only">Discord Server</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20.317 4.37a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 00-5.487 0 12.64 12.64 0 00-.617-1.25.077.077 0 00-.079-.037A19.736 19.736 0 003.677 4.37a.07.07 0 00-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 00.031.057 19.9 19.9 0 005.993 3.03.078.078 0 00.084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 00-.041-.106 13.107 13.107 0 01-1.872-.892.077.077 0 01-.008-.128 10.2 10.2 0 00.372-.292.074.074 0 01.077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 01.078.01c.12.098.246.198.373.292a.077.077 0 01-.006.127 12.299 12.299 0 01-1.873.892.077.077 0 00-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 00.084.028 19.839 19.839 0 006.002-3.03.077.077 0 00.032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 00-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"></path>
                            </svg>
                        </a>

                        <a
                                href="https://t.me/JustSteveKing"
                                title="Talk to me on telegram"
                                onclick="window.fathom.trackGoal('CMIYFQF3', 0);"
                                class="text-gray-400 hover:text-gray-800 focus:text-gray-800 dark:text-gray-300 dark:hover:text-gray-50 dark:focus:text-gray-50 hover:underline transition-colors duration-150 ease-in-out"
                        >
                            <span class="sr-only">Telegram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M11.944 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0a12 12 0 00-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 01.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-8 md:mt-0 md:order-1">
                        <p class="text-left md:text-center text-gray-400 dark:text-gray-300">
                            &copy; {{ \Carbon\Carbon::now()->year }} JustSteveKing. All rights reserved.
                        </p>
                    </div>
                </div>
            </footer>

        </section>
    </body>
</html>
