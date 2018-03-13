<?php

return [
    'serverDispatcher' => [
        'middlewares' => [
            \Swoft\View\Middleware\ViewMiddleware::class,
            \Swoft\Session\Middleware\SessionMiddleware::class,
        ]
    ],
    'httpRouter' => [
        'ignoreLastSep' => false,
        'tmpCacheNumber' => 1000,
        'matchAll' => '',
    ],
    'requestParser' => [
        'parsers' => [

        ],
    ],
    'view' => [
        'viewsPath' => '@resources/views/',
    ],
    'cache' => [
        'class' => \Swoft\Cache\Cache::class,
        'driver' => 'redis',
    ],
    'TestBean' => [
        'class' => \App\BeanTest\TestBean::class,
        'name' => 'bigboom',
        'age' => 12,
        [ // 构造函数参数
            'arg1',
            'TestBean'
        ]
    ],
    'TestBean2' => [
        'class' => \App\BeanTest\TestBean2::class,
    ],
];
