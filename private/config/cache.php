<?php


return [
    //输入缓存
    'output' => [
        'adapter'  => 'File',
        'lifetime' => '3600',
        'prefix'   => 'event_',
        'cacheDir' => APP_PATH . 'runtime/cache/data/'
    ],

    //通用数据缓存
    'data' => [
//                'adapter' => 'file',
//                'lifetime' => '60',
//                'prefix' => 'event_',
//                'redis' => [
//                    'host' => '127.0.0.1',
//                    'port' => 6379
//                ]
        'adapter'  => 'File',
        'lifetime' => '3600',
        'prefix'   => 'event_',
        'cacheDir' => APP_PATH . 'runtime/cache/data/'
    ]
];