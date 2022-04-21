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

    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'author' => '',


    'collections' => [
        'articles' => [
            'author' => 'Steve McDougall',
            'sort' => '-date',
            'path' => '/{filename}'
        ],
        'talks' => [
            'sort' => '-date',
            'path' => '/talks/{filename}'
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
            'link' => '/talks',
            'text' => 'Talks',
            'title' => 'Talks I have given in the community',
        ],
    ],
];
