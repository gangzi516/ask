<?php

/**
 *  app 应用配置
 *
 */
return [
    /**
     * 是否开启调试模式
     */
    'debug'          => true,
    'base_uri'       => '/',
    'logger'         => [
        'enabled' => true, //是否开启
        'path'    => APP_PATH . 'runtime/logs/',
        'format'  => '[%date%][%type%] %message% at [%file%: %line%]',
        'project' => 'default'
    ],

    'autoload' => [],

    'namespaces' => [
        //应用服务命名空间
        'AppProviders' => APP_PATH . 'providers',

        //应用控制台命令
        'AppCommand'   => APP_PATH . 'command',

        //应用 facades
        'AppFacades'   => APP_PATH . 'facades',
    ],

    /**
     * Facade
     */
    'facades' => [],

    'providers' => [],
];