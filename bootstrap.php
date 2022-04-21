<?php

use App\Listeners\GenerateReadingTime;
use App\Listeners\GenerateSitemap;
use Torchlight\Jigsaw\TorchlightExtension;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

$events->afterBuild([
    GenerateSitemap::class,
    GenerateReadingTime::class,
]);

TorchlightExtension::make(
    container: $container,
    events: $events,
)->boot();
