<?php

declare(strict_types=1);


use GitHub\Sponsors\Client;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

return [
    'baseUrl' => 'http://localhost:8000',
    'production' => false,
    'type' => 'website',
    'twitter' => '@JustSteveKing',

    'title' => 'JustSteveKing',
    'description' => 'Consultant CTO, Software Engineer, Educator, Community Advocate.',
    'author' => 'JustSteveKing',


    'collections' => [
        'articles' => [
            'author' => 'Steve McDougall',
            'sort' => '-date',
            'path' => '/{filename}'
        ],
        'series' => [
            'sort' => '-date',
            'path' => '/series/{filename}',
            'articles' => function ($page, $allArticles) {
                return $allArticles->filter(function ($article) use ($page) {
                    return $article->series === $page->getFilename();
                })->sortBy('series-order');
            },
        ],
        'talks' => [
            'sort' => '-date',
            'path' => '/talks/{filename}'
        ],
        'tags' => [
            'path' => '/blog/tags/{filename}',
            'articles' => function ($page, $allArticles) {
                return $allArticles->filter(function ($article) use ($page) {
                    return $article->tags
                        ? in_array($page->getFilename(), $article->tags, true)
                        : false;
                });
            },
        ],
        'sponsors' => [
            'extends' => '_layouts.sponsor',
            'path' => '/sponsors/{filename}',
            'items' => static function ($config): array {
                $client = new Client($_ENV['GH_SPONSORS_TOKEN']);

                $sponsors = $client->login('JustSteveKing')->sponsors()->all();

                return collect($sponsors)->map(function ($sponsor) {
                    return [
                        'name' => $sponsor['login']
                    ];
                })->toArray();
            },
        ],
    ],
    'perPage' => 5,
    'showReadingTime' => true,

    'email' => '',
    'navigation' => [
        [
            'link' => '/uses',
            'text' => 'Uses',
            'title' => 'Technology I use',
        ],
        [
            'link' => '/blog',
            'text' => 'Articles',
            'title' => 'Recent Articles',
        ],
        [
            'link' => '/series',
            'text' => 'Series',
            'title' => 'Articles groups by Series',
        ],
        [
            'link' => '/talks',
            'text' => 'Talks',
            'title' => 'Talks I have given in the community',
        ],
    ],
];
