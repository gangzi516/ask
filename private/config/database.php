<?php

/**
 *  数据库配置文件
 *
 *  @filename database.php
 *  @version 0.0.1 beta
 *  @package
 *  @datetime 2014-6-15
 *
 */
return [
    /**
     * mysql配置
     */
    'mysql' => [
            //适配器
            'adapter'         => 'pdo\Mysql',
            'write'           => [
                //主机地址
                'host'     => 'localhost',
                //用户名
                'username' => 'root',
                //密码
                'password' => '',
                //库名称
                'dbname'   => 'test',
            ],
            'read'            => [
                //主机地址
                'host'     => 'localhost',
                //用户名
                'username' => 'root',
                //密码
                'password' => '',
                //库名称
                'dbname'   => 'test',
            ],
            //使用注释服务
            'use_annotations' => FALSE,
            'metadata'        => [
                'adapter'     => 'Files',
                'metaDataDir' => APP_PATH . 'runtime/cache/metadata/',
        //        'adapter' => 'redis',
        //        'lifetime' => '3600',
        //        'prefix' => 'event_',
        //        'redis' => [
        //            'host' => '127.0.0.1',
        //            'port' => 6379
        //        ]
            ],
            'annotations'     => [
                'adapter'        => 'Files',
                'annotationsDir' => APP_PATH . 'runtime/cache/annotations/',
            ],
    ],

    /**
     * mongo配置
     */
    'mongo' => [
        // 如果不是默认端口号请在host里加上端口号
        'host'   => 'localhost',
        'dbname' => 'test',
    ],
];
