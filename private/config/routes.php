<?php

return [
    'router_not_found' => [
        'controller' => 'error',
        'action'     => 'show404'
    ],

    'rules'          => [
        '/:controller/:action/:params' => [
            'controller' => 1,
            'action'     => 2,
            'params'     => 3
        ],
        '/:controller/:action'         => [
            'controller' => 1,
            'action'     => 2,
        ],
        '/:controller'                 => [
            'controller' => 1
        ],
    ]
];
