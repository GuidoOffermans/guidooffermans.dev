<?php

use JohannSchopplich\Helpers\Env;
use Kirby\Cms\App;

$base = dirname(__DIR__);

require $base . '/vendor/autoload.php';
Env::load($base);

$kirby = new App([
    'roots' => [
        'index'    => __DIR__,
        'base'     => $base,
        'content'  => $base . '/content',
        'site'     => $base . '/site',
        'storage'  => $storage = $base . '/storage',
        'accounts' => $storage . '/accounts',
        'cache'    => $storage . '/cache',
        'sessions' => $storage . '/sessions',
    ]
]);

echo $kirby->render();
