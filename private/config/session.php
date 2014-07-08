<?php

return [
    'adapter' => 'files',
    'name' => 'rdsession',
    'lifetime' => '3600',
    'cookie_liftime' => '1440',

    'path' => [
        [
            'host' => '127.0.0.1',
            'port' => 6379,
            'weight' => 1,
            'database' => 0,
            'timeout' => 3,
            'prefix' => 'session_'
        ]
    ]
];