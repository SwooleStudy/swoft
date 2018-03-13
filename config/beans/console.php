<?php
return [
// ......
    'commandRoute' => [
        'class' => \Swoft\Console\Router\HandlerMapping::class,
        'suffix' => 'Command',
        'deaultCommand' => 'index',
        'delimiter' => ':',
    ],
    // ......
];