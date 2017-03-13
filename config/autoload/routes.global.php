<?php

return [
    'dependencies' => [
        'invokables' => [
            //Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
            //App\Action\PingAction::class => App\Action\PingAction::class,
            //Interop\Container\ContainerInterface::class => Interop\Container\ContainerInterface::class
        ],
        'factories' => [
            //Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouterFactory::class,
            //App\Action\HomePageAction::class => App\Action\HomePageFactory::class,
        ],
    ],

    'routes' => [
        /*
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => App\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        */
    ],
];
