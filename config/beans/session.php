<?php
/**
 * Created by PhpStorm.
 * User: xiongcaho
 * Date: 2018/3/11
 * Time: 下午10:23
 */

return [
    'sessionManager' => [
    'class' => \Swoft\Session\SessionManager::class,
    'config' => [
        'driver' => 'redis',
        'lifetime' => 120,
        'expire_on_close' => false,
        'encrypt' => false,
        //'storage' => '@runtime/sessions',
        'name' => 'SWOFT_SESSION_ID',
    ],
],
];
