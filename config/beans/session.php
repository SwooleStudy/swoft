<?php

return [
    'sessionManager' => [
        'class' => \Swoft\Session\SessionManager::class,
        'config' => [
            'driver' => 'redis',
            'lifetime' => 120,
            'expire_on_close' => false,
            'encrypt' => false,
//            'storage' => '@runtime/sessions',
            'name' => 'SWOFT_SESSION_ID',
        ],
    ],
];