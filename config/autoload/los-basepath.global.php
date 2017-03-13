<?php

return [

    'los_basepath' => '/dev/cm_45_ki',

    'dependencies' => [
        'factories' => [
            LosMiddleware\BasePath\BasePath::class => LosMiddleware\BasePath\BasePathFactory::class,
        ],
    ],
/*
*/
/*
    'middleware_pipeline' => [
        'pre_routing' => [
            [ 'middleware' => LosMiddleware\BasePath\BasePath::class ],
        ],
    ],
*/
     'middleware_pipeline' => [
        'always' => [
            'middleware' => [
                LosMiddleware\BasePath\BasePath::class,
            ],
            'priority' => 10000,
        ],
    ],
];