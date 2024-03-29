<?php

use App\Listeners\GenerateReadingTime;
use App\Listeners\GenerateSitemap;
use Torchlight\Jigsaw\TorchlightExtension;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

$events->afterCollections(
    GenerateReadingTime::class,
);

$events->afterBuild([
    GenerateSitemap::class,
]);

TorchlightExtension::make(
    $container,
    $events,
)->boot();
