<?php

return [
    'serverDispatcher' => [
        'middlewares' => [
            \Swoft\View\Middleware\ViewMiddleware::class,
            \Swoft\Session\Middleware\SessionMiddleware::class,
        ]
    ],
    'httpRouter'       => [
        'ignoreLastSep'  => false,
        'tmpCacheNumber' => 1000,
        'matchAll'       => '',
    ],
    'requestParser'    => [
        'parsers' => [

        ],
    ],
    'view'             => [
        'viewsPath' => '@resources/views/',
    ],
    'cache'            => [
        'class' => \Swoft\Cache\Cache::class,
        'driver' => 'redis',
    ],
];
